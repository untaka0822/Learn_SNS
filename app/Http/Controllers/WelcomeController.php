<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    // indexメソッドを追加
    public function index() {
    	// ここに処理を記述
    	return view('welcome');
    }
}
