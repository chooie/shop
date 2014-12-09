<?php
namespace Shop\Comments;

class Comment extends \Eloquent
{
    protected $fillable = ['product_id', 'user_id', 'body'];

    public function owner()
    {
        return $this->belongsTo('Larabook\Users\User', 'user_id');
    }
$table->increments('id');
$table->integer('product_id')->index();
$table->integer('user_id')->index();
$table->text('body');
$table->timestamps();
}