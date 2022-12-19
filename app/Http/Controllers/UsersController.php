<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function store(Request $request) {
        // $data = [ 
        //  "firstname" => $request->firstname,
        //  "lastname" => $request->lastname,
        //  "role" => $request->role,
        //  "email" => $request->email,
        //  "phone" => $request->phone,
        //  "password" => $request->password
        // ];
         $data = [ 
         "firstname" => "Rizki",
         "lastname" => "Ramadhan",
         "role" => "admin",
         "email" => "rizki@gmail.com",
         "phone" => "08128394364",
         "password" => Hash::make("adarizki123")
        ];
         
        $insertingData = User::create($data);
        return $insertingData;
        //  if ($insertingData) {
        //      Alert::success('Berhasil', 'user berhasil ditambahkan');
        //  }
        //  return redirect('/products');
     }
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required','email:rfc:dns'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/products');
        }
        return back()->withErrors([
            'loginError' => 'Login gagal',
        ]);
    }
    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function registerKasir() {
        return view('tailwind.registerkasir');
        
    }
    public function storeKasir(Request $request) {
        $validateRequest = $request->validate([
            'firstname' => ['required','alpha'],
            'lastname' => ['required', 'alpha'],
            'role' => ['required'],
            'email' => ['required','email:rfc:dns'],
            'phone' => ['required', 'numeric'],
            'password' => ['required'],
            'confirm_password' => ['required', 'same:password']
        ]);
        $data = [ 
            "firstname" => $request->firstname,
            "lastname" =>  $request->lastname,
            "role" => $request->role,
            "email" => $request->email,
            "phone" => $request->phone,
            "password" => Hash::make($request->password)
           ];
        $insertingData = User::create($data);
        return redirect('/products');
    }
}
