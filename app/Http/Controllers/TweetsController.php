<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tweet;
// namespaceという機能がPHPには存在する
// namespaceで定義した名前をuseで呼び出せる

class TweetsController extends Controller
{
    public function index() {
        // tweetsから一覧画面を表示する

        // modelを使う Eloquent
        $tweets = Tweet::all()->toArray(); // メソッドチェイン
        // SELECT * FROM tweets WHERE 1;
        // Eloquent(model)で取得したデータは、Collectionクラスという配列のラッパークラスで構成されている
        // Collection → Arrayクラスに変換する

        // laravelにはデバッグ用にdd()ってのが用意されている dump and die
        // dd($tweets);
        // view('ディレクトリ名.ファイル名', compact(変数名))
        return view('tweets.index', compact('tweets')); // 文字列で。＄なし
    }


    // public function hoge()
    // {
    //     $this->index();
    // }
}

// function index() {
// }

// index();

// // クラス::メソッド名
// TweetsController::index();

// // オブジェクト->メソッド名
// // クラス（設計図）から、オブジェクトを生成する（インスタンス化）
// $tweet = new TweetsController();
// $tweet->index();
// $this->index(); // ←このthisってなんだっけ？

// $tweet2 = new TweetsController();











