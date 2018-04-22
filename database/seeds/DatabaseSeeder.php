<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB; // DBモデルを使用可能にしている

use Faker\Factory as Faker; // as は名前を決められる
use Carbon\Carbon; // 日時の取得に使う
use App\Tweet; // App\モデル名

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('TweetsTableSeeder'); // call()内にSeederクラスの名前を書く

        Model::reguard();
    }
}

class TweetsTableSeeder extends Seeder { // ① Seederクラスを作成

    public function run() {

        DB::table('tweets')->delete();
        // DELETE FROM `tweets`

        $faker = Faker::create('en_US'); // ②デフォルトの投稿内容を作成

        for ($i=0; $i < 10; $i++) {  // ③for文で10個文の投稿内容を作成
            Tweet::create([ // モデル名 = テーブル名
                'tweet' => $faker->text(),
                'member_id' => 1,
                'created_at' => Carbon::today()
            ]);
            // INSERT INTO `tweets` SET `tweet`=?, `member_id`=?, `created_at`=NOW()
        }
    }

}





















