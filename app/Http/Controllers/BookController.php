<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Image;
use App\Models\Order;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{
    public function Add_Book(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'author' => 'required',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|numeric',
            'image' => 'required'

        ]);
        $book = new book;

        $book->name =$request->name;
        $book->categoryId = $request->category;
        $book->authorId = $request->author;
        $book->price = $request->price;
        $book->stock = $request->stock;

        $book->save();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('books'), $imageName);

            // Create a new image instance
            $image = new Image();
            $image->product_id = $book->id; // Associate the image with the book ID
            $image->image = $imageName;
            $image->save(); // Save the image with the associated book ID
        }

        return redirect()->route('add_book_form')->with('success', 'Book Created Successfully!!');
        }
        public function showCategory($id)
        {
        $books = Book::whereHas('category', function($query) use($id){
            $query->select('id') // Select the columns you are grouping by
            ->where('id', $id);

        })->get();

        return view('user.list')->with('books', $books);

        }

        public function destroyBook ($id)
        {
        $book = Book::findOrFail($id);
        $book->images()->delete();
        $book->delete();

        return back()->withSuccess("User Deleted Successfully");

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






}

