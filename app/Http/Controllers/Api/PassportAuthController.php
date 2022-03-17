<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class PassportAuthController extends Controller
{
        /**
     * Registration
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
 
        $input = $request->all();
        //print_r($input);
        $input['password'] = Hash::make($request->password);
       
        $digit = 3; // Amount of digits
         $min = pow(10,$digit);
         $max = (pow(10,$digit+1)-1);
         $code = rand($min, $max);
         $user = User::create($input);
        $details = [
            'title' => 'Mail from Ecommerce List',
            'body' => $code
        ];
        
         
         
         $email = $request->email;
         /*$to = $email;
         $subject = "Verify Code From Todo";
         
         $message = "<b>Copy Four Digit Code.</b>";
         $message .= "<h1>1234</h1>";
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";*/
         $retval =  \Mail::to($email)->send(new \App\Mail\SendMailCode($details));

        $token = $user->createToken('LaravelAuthApp')->accessToken;
 
        return response()->json(['data'=>$user,'token' => $token], 200);
    }
 
    /**
     * Login
     */
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }  
    
    public function resetPassword(Request $request){
        $password = $request->password;
        $user =  User::where('email', $request->email)->update(['password' => Hash::make($password)]);
        return response()->json(['success' => true]);
    }

    
}
