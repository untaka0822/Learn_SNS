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

    // メソッドの引数にroutesで定義した{tweet_id}を置く
    public function show($tweet_id) {
        // カラム名がidだった場合はfind()が使える
        // where('カラム名','比較演算子','値')
        // =の場合は比較演算子省ける
        $tweet = Tweet::where('tweet_id','=',$tweet_id)->first()->toArray();
        // SELECT * FROM tweets WHERE tweet_id=3

        // where()で取得できるデータのクラスは？
        // Builderクラス→Collectionクラス→Arrayクラスへ
        // get()メソッド
        // toArray()メソッド
        // dd($tweet->get()->toArray());
        // dd($tweet);

        // first()はデータ一件のみ取得するwhere()を使用した場合に階層をシンプルにしてくれる
        // firstなので、取得した１番最初のデータのみ配列化する

        return view('tweets.show', compact('tweet'));
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











