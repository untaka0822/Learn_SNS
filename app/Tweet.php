<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
	// 使いたいカラムを配列で指定
    protected $fillable = ['tweet_id', 'tweet', 'member_id', 'reply_tweet_id', 'delete_flag', 'created_at',	'updated_at'];
}
