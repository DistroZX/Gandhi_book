<?php
namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Order;
use function Laravel\Prompts\error;


class UserController extends Controller
{


      // admin index
      public function admin_index(){

            return view('admin.login');
      }


      // admin login
      public function anonymous_login(Request $request){

         $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->regenerate();
            if ($user->user_type === 'admin') {
                return redirect()->route('admin.dashboard')->withSuccess('You have successfully logged in!');

            } else {
                Auth::logout();
                return redirect()->route('sign_up')->with('error', "You don't have admin access.");
            }
        }else{
            return redirect()->route('sign_in')->with('error', "Invalid credentials!");
        }

      }


      public function sign_in(){
         return view('user.sign_in');
      }


      public function sign_up()
      {
         return view('user.sign_up');
      }


      // user login
      public function login(Request $request)
      {

         $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
         if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('index')->withSuccess('You have successfully logged in!');
        }else {
            return redirect()->route('sign_in')->with('error',"User doesn't exist.Invalid credential! Please try again.");
      }


      // user logout
      }
      public function user_logout()
      {
         Auth::logout();
         return redirect()->route('index')->with('success', 'You have been logged out!');
      }



      // admin logout
      public function admin_logout()
      {
         Auth::logout();
         return view('admin.login');
      }


      public function store(Request $request)
      {
          $validatedData = $request->validate([
              'username' => 'required|unique:users',
              'email' => 'required|email|unique:users',
              'password' => 'required|min:8',
              'cpassword' => 'required|same:password',
          ]);
            $generatedPassword = $validatedData['password'];

            $users = new User();
            $users->username = $validatedData['username'];
            $users->email = $validatedData['email'];
            $users->password = Hash::make($validatedData['password']);

            $users->save();




            return redirect()->route('sign_up')->with('success', 'You have successfully registered! Check your email for the generated password.');


      }
      public function AddUser(Request $request)
      {
          $validatedData = $request->validate([
              'username' => 'required|unique:users',
              'email' => 'required|email|unique:users',
              'password' => 'required|min:8',
              'c_password' => 'required|same:password',
              'user_type' => 'required',
          ]);



          $user = new User();
          $user->username = $validatedData['username'];
          $user->email = $validatedData['email'];
          $user->password = Hash::make($validatedData['password']);
          $user->user_type = ($validatedData['user_type']);


          $user->save();

          return redirect()->route('show')->with('success', 'You have successfully added a user!');
      }
      public function destroy($id)
      {
          $user = User::findOrFail($id);
          $user->delete();
          return back()->withSuccess("User Deleted Successfully");
      }

      public function userProfile(){
              $id = auth()->user()->id;
              $books = Book::get();
              $user = User::with('addresses')->find($id);
              $orders =  $user->orders;

              return view('user.profile', [
                  'books' => $books,
                  'user' => $user,
                  'orders' => $orders
                  ]);
      }
      public function userAddressStore(Request $request)
      {
          dd("sddsd");
          $validatedData = $request->validate([
              'street' => 'required',
              'city' => 'required',
              'postal_code' => 'required|number',
          ]);

          $address = new Address();
          $address->street = $validatedData['street'];
          $address->city = $validatedData['city'];
          $address->postal_code = $validatedData['postal_code'];

          $address->save();

          return response()->json(['message' => 'Address added successfully']);

      }




}
