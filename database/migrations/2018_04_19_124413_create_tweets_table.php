<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ここにmigrate時に作るテーブルの中身を書いていく
        Schema::create('tweets', function (Blueprint $table) {
            $table->increments('tweet_id');
            $table->string('tweet');
            $table->integer('member_id')->unsigned(); // unsigned = 外部キーの指定
            $table->integer('reply_tweet_id');
            $table->integer('delete_flag');
            $table->timestamps();

            // 外部キーを指定
            $table->foreign('member_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            // $table->foreign('テーブルの外部キー')
            //       ->references('他のテーブルの主キー')
            //       ->on('どこのテーブルか')
            //       ->onDelete('レコードが削除された時に関連しているものも削除するか');
        });

        //  Schema::create('テーブル名', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->string('password', 60);
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
