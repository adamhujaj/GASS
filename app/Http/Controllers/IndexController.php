<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data['title'] = 'Gas-adam';
        return view('home', $data);
    }
}
