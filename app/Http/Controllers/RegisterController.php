<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Storage;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',
            'username' => 'required',
            'id_type' => 'required',
            'address_1' => 'required',
            'address_2' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'state' => 'required',
            'phone_no' => 'required',
        ]);

        $input = $request -> all();

        $user_data = Http::asForm()->post(env('API_URL').'/api/register', [
            
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'name' => $request->get('name'),
            "device_token" => 'paan',
            'username' => $request->get('username'),
            'id_type' => $request->get('id_type'),
            'address_1' => $request->get('address_1'),
            'address_2' => $request->get('address_2'),
            'postcode' => $request->get('postcode'),
            'city' => $request->get('city'),
            'state' => $request->get('state'),
            'phone_no' => $request->get('phone_no'),
        ]);

        return view('index');

        // $user = User::create($user_data);

        

        // if($response['success'] == 'true')
        // {
        //     $path = $response['data']['id'].'.json';
        //     Storage::disk('local')->put($path, json_encode($response['data']));
        //     return back()->with('success', 'Thanks for your registration, we will get back to you soon!');
        // } else {
        //     return back()->with('error', 'Please fill all the required field');

        // }
    }
}
