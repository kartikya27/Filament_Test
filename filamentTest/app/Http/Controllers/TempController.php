<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TempController extends Controller
{
    public function temp()
    {
        dd(State::all()->pluck('state', 'state_id')->toarray());
    }

    public function city(){
        return City::all();
    }
    
    public function city_with_state($state_id){
        return City::where('state_id',$state_id)->get();
    }

    function index(Request $request)
    {
        $user= User::where('email', $request->email)->first();
        // print_r($data);
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
        
             return response($response, 201);
    }
}
