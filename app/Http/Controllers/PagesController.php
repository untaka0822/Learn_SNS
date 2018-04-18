<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
   	// indexメソッドを追加
    public function index() {

    	// ここに処理を記述
    	return view('index');
    }

    public function about(Request $request) {

    	// 配列に値をセット
        $data = array();
        $data['first_name'] = 'Luke';
        $data['last_name'] = 'Skywalker';

 		// view('ディレクトリ名.ファイル名');
        // view関数の第２引数に配列を渡す
        return view('pages.about', compact('data'));
    }
}











