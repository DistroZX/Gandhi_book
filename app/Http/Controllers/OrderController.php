<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function BookOrderUpdate($id, Request $request,$userId)
    {
        $book = Book::find($id);
        $user = User::with('addresses')->find($userId);


        $min = 1000000;
        $max = 9999999;
        $order_id = random_int($min, $max);

        $order = new Order();
        $order->order_id = $order_id;
        $order->product_id = $request->product_id;
        $order->user_id = $request->userId;
        $order->quantity = $request->quantity;
        $order->total_price = $request->total_price;
        $order->status = $request->status;

        $order->save();

        return redirect()->route('index', ['id' => $book->id, 'userId' => $user->id])
            ->with('success', 'Order placed successfully!')
            ->with(['quantity' => $request->quantity, 'totalPrice' => $request->total_price]);



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
