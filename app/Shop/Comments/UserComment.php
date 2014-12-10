<?php
namespace Shop\Comments;

class UserComment extends \Eloquent
{
    protected $fillable = ['user_id', 'commenter_id', 'body'];
    protected $table = 'product_comments';

    public function owner()
    {
        return $this->belongsTo('Shop\Users\User', 'user_id');
    }
}