<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class UserController extends Controller
{

    public function UserProfile(){

        return view('profile');
        // $user_data = Http::asForm()->post(env('API_URL').'/api/user?api_token=fXLu7VeYgXDu82SkMxlLPG1mCAXc4EBIx6O5isgYVIKFQiHah0xiOHmzNsBv', [
            
        //     'email' => $request->get('email'),
        //     'password' => $request->get('password'),
        //     'name' => $request->get('name'),
        //     "device_token" => 'paan',
        //     'username' => $request->get('username'),
        //     'id_type' => $request->get('id_type'),
        //     'address_1' => $request->get('address_1'),
        //     'address_2' => $request->get('address_2'),
        //     'postcode' => $request->get('postcode'),
        //     'city' => $request->get('city'),
        //     'state' => $request->get('state'),
        //     'phone_no' => $request->get('phone_no'),
        // ]);

        // $response = Http::get(env('API_URL').'/api/user', [
        //     'api_token' => 'fXLu7VeYgXDu82SkMxlLPG1mCAXc4EBIx6O5isgYVIKFQiHah0xiOHmzNsBv'
        // ]);

        // return redirect('profile'.$response);
    } 
    

    // public function updateProfile(){

    //     $user_data = Http::asForm()->post(env('API_URL').'/api/user/update', [
            
    //         'email' => $request->get('email'),
    //         'password' => $request->get('password'),
    //         'name' => $request->get('name'),
    //         "device_token" => 'paan',
    //         'username' => $request->get('username'),
    //         'id_type' => $request->get('id_type'),
    //         'address_1' => $request->get('address_1'),
    //         'address_2' => $request->get('address_2'),
    //         'postcode' => $request->get('postcode'),
    //         'city' => $request->get('city'),
    //         'state' => $request->get('state'),
    //         'phone_no' => $request->get('phone_no'),
    //     ]);

    // }

    
}

