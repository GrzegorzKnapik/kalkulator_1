<?php
namespace App\Http\Controllers;
use Illuminate\http\Request;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



class HomeController extends Controller
{
    public function home() {

    return view('homeView');   
    }

}