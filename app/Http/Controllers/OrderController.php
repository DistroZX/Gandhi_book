<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function userOrder(){

        $id = auth()->user()->id;
        $user = User::with('addresses')->find($id);
        $orders =  $user->orders;
        $orderDetails = [];
        $totalOrderPrice = 0;
        $subtotal = 0;

        foreach($user->orders as $order){
            $orderId = $order->product_id;
            $subtotal += $order->quantity * $order->book->price;
            $totalOrderPrice += $order->quantity * $order->book->price ;
            $orderDetail = Order::with('book.image')->where('product_id', $orderId)->first();
            $orderDetails[] = $orderDetail;
        }

        return view('user.order', [
            'user' => $user,
            'orders' => $orders,
            'orderDetails'=>$orderDetails,
            'subtotal' => $subtotal,
            'totalOrderPrice' => $totalOrderPrice
        ]);
    }
    public function createRazorpayOrder($amount)
    {
        $apiKey = config('services.registration.rzp.key');
        $apiSecret = config('services.registration.rzp.secret');
        $api = new Api($apiKey, $apiSecret);

        $order = $api->order->create([
            'amount' => $amount,
            'currency' => 'INR',
            'payment_capture' => 1,
        ]);


        return $order->id;
    }
    public function BookOrderUpdate( Request $request)
    {

       $request->validate([
            'order_id' => 'required',
            'product_id' => 'required',
            'userId' => 'required',
            'quantity' => 'required',
            'total_price' => 'required',
            'status' => 'required',
        ]);
        $order = new Order();

        $order->order_id = $request->order_id;
        $order->product_id = $request->product_id;
        $order->user_id = $request->userId;
        $order->quantity = $request->quantity;
        $order->total_price = $request->total_price;
        $order->status = $request->status;

        $order->save();


        $amount = $order->total_price * 100;
        $razorpayOrderId = $this->createRazorpayOrder($amount);


        $orderId = $order->order_id;

        $payment = new Payment();
        $payment->razorpay_order_id = $razorpayOrderId;
        $payment->order_id = $request->order_id;
        $payment->status = $request->status;

        $payment->save();


        return response()->json(['message' => 'Order created successfully', 'orderId' => $orderId, 'razorpay_order_id' => $razorpayOrderId]);

    }

    public function handlePayment(Request $request)
    {
        $payment = Payment::updateOrCreate(
            ['order_id' => $request->order_id],
            [
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'status' => 2,
            ]
        );

        return response()->json(['message' => 'Payment details saved successfully']);

    }

    public function OrderList()
    {
        $userOrders = Order::with('book.image','userOder')
            ->get();

        return view('admin.orderDetails.order_show',['userOrders'=> $userOrders]);
    }
    public function updateStatus(Request $request)
    {
        $request->validate([
            'status' => 'required|numeric'
        ]);
        $main_id = $request->id;
        $order = Order::find( $main_id);
        $order->status = $request->input('status');
        $order->save();

        return response()->json(['success' => true, 'message' => 'Status updated successfully!']);


    }



}
