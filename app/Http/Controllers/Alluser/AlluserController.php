<?php

namespace App\Http\Controllers\Alluser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlluserController extends Controller
{
    public function index(){
        return view('alluser.home');
    }
}
