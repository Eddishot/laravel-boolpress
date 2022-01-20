<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    function index(){
        return view("admin.home");
    }
}
