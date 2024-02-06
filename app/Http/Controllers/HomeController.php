<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Image;
use App\Models\User;
use App\Models\Author;
use App\Models\Category;


use Illuminate\Http\Request;



class HomeController extends Controller
{

	public function anonymous_dashboard(){

		return view('admin.index');
	}
	public function index()
    {
        $books = Book::get();
        $images = Image::get();
        $categoryIds = [2, 3];

        $booksInCategory = Book::whereHas('category', function ($query) use ($categoryIds) {
            $query->whereIn('id', $categoryIds);
        })->get();

        $categoriesWithBookCount = Category::withCount('books')
            ->orderByDesc('books_count')
            ->with('books', function ($query) {

            })
            ->limit(4)
            ->get();
        return view('user.index', [
            'books' => $books,
            'images'=> $images,
            'booksInCategory' => $booksInCategory,
            'categoriesWithBookCount' =>  $categoriesWithBookCount
        ]);

	}
	public function bookList(){

        $categoryId = [2];
        $books = Book::simplePaginate(12);
        $images = Image::get();

        $booksInCategory = Book::whereHas('category', function ($query) use ($categoryId) {
            $query->whereIn('id', $categoryId);
        })->get();

		return view('user.list',[
            'books' => $books,
            'images'=> $images,
            'booksInCategory' => $booksInCategory,
        ]);
	}
	public function category(){

        $categories = Category::get();
		return view('user.category',
            ['categories' => $categories]);
	}
	public function author(){
        $authors = Author::get();
		return view('user.authors',
        ['authors' => $authors]);
	}
	public function blog(){

		return view('user.blog');

	}
	public function admin_logout(){

		return view('admin.login');

	}
    public function showUser()
    {
        $users = User::get();
        return view('admin.userDetails.userList', ['users' => $users]);
    }

    public function AddUserForm()
    {
        return view('admin.userDetails.addUser');
    }
    public function Book_form()
    {
        $authors = Author::get();
        $categories = Category::get();

        return view('admin.BookDetails.book_add', ['authors' => $authors , 'categories' => $categories]);
    }
    public function Book_List()
    {
        $books = Book::get();
        $images = Image::get();
        return view('admin.BookDetails.book_show',['books' => $books, 'images'=> $images]);
    }
    public function AuthorsList()
    {
        return view('admin.BookDetails.authors');
    }
    public function CategoriesList()
    {


        return view('admin.BookDetails.categories');


    }
    public function showBookDetails($id){
        $book = Book::find($id);
        $images = Image::get();


        if(!$book){
            abort(404);
        }
        return view('user.book.details', ['book' => $book,
        'images' => $images]);
    }
    public function BookCheckoutPage($id, Request $request,$userId){
        $request->validate([
          'quantity'=>'required'
        ]);
        $quantity = $request->input('quantity');
        $totalPrice = $request->input('total_price');
        $book = Book::find($id);
        $user = User::with('addresses')->find($userId);

        if(!$book){
            abort(404);
        }
        return view('user.book.checkout',
            ['book' => $book,
                'user' => $user,
                'quantity' => $quantity,
                'totalPrice' => $totalPrice
            ]);
    }

}
