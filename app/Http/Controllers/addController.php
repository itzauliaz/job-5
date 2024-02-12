<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;

class addController extends Controller
{
    public function add(): View
    {
        return view ('product.create');
    }
}
