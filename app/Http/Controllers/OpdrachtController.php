<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opdracht;
use App\Models\Fruit;

class OpdrachtController extends Controller
{
    public function show()
    {
        

        $name = "Kevin Palinckx";

        $fruits = Fruit::all();
        
        return view('opdracht', ['fruits' => $fruits, 'name' => $name]);
    }
}
