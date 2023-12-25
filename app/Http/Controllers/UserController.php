<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class UserController extends Controller
{


      // admin index
      public function admin_index(){

            return view('admin.login');
      }


      // admin login
      public function anonymus_login(Request $request){

         $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard')->withSuccess('You have successfully logged in!');
        }else {
            return redirect()->route('sign_up')->with('error',"User doesn't exist!");
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
            $user = Auth::user();
            $request->session()->regenerate();
            return redirect()->route('index')->withSuccess('You have successfully logged in!');
        }else {
            return redirect()->route('sign_up')->with('error',"User doesn't exist!");
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


            // Mail to users
            // Include PHPMailer autoloader
            // require_once __DIR__ . '/../../../vendor/autoload.php';



            // // Create a PHPMailer instance
            // $mail = new PHPMailer(true);

            // try {
            // // Gmail SMTP Configuration
            // $mail->isSMTP();
            // $mail->Host = 'smtp.gmail.com';
            // $mail->SMTPAuth = true;
            // $mail->Username = 'ansilaferbin@gmail.com'; // Your Gmail address
            // $mail->Password = 'fuckOFF@666'; // Your Gmail password
            // $mail->SMTPSecure = 'tls';
            // $mail->Port = 587;

            // // Email content
            // $mail->setFrom('ansilaferbin@gmail.com', 'kkpp');
            // $mail->addAddress($validatedData['email']); // Recipient email
            // $mail->Subject = 'Your Generated Password';
            // $mail->isHTML(true);
            // $mail->Body = "Your generated password is: $generatedPassword. Please change this password after logging in for security reasons.";

            // // Send email
            // $mail->send();

            return redirect()->route('sign_up')->with('success', 'You have successfully registered! Check your email for the generated password.');


      }
      public function AddUser(Request $request)
      {
          $validatedData = $request->validate([
              'username' => 'required|unique:users',
              'email' => 'required|email|unique:users',
              'password' => 'required|min:8',
              'cpassword' => 'required|same:password',
              'user_type' => 'required',
          ]);
          $generatedPassword = $validatedData['password'];

          $users = new User();
          $users->username = $validatedData['username'];
          $users->email = $validatedData['email'];
          $users->password = Hash::make($validatedData['password']);
          $users->user_type = ($validatedData['user_type']);
          ;

          $users->save();

          return redirect()->route('show')->with('success', 'You have successfully added a user!');
      }
      public function destroy($id)
      {
         $user = User::findOrFail($id);
         $user->delete();
         return back()->withSuccess("User Deleted Successfully");
      }




}
