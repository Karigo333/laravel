<?php

namespace App\Http\Controllers;


use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $ads = Ad::paginate(10);
        return view('home', [
            'ads' => $ads
        ]);
    }
}
