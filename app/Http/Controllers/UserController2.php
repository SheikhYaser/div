<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserController2 extends Controller
{
    public function check_model()
    {
        // $user = User::first();

        // $check_favourite = $user->check_favourite(2);

        // if ($check_favourite == null) {

        //     dd('Yo`q');

        // }

        // dd('Bor');

        $products = Product::all();

        return view('welcome', compact('products'));
    }
}
