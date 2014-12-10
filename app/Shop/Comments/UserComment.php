<?php
namespace Shop\Comments;

class UserComment extends \Eloquent
{
    protected $fillable = ['user_id', 'commenter_id', 'body'];
    protected $table = 'user_comments';

    public function commentee()
    {
        return $this->belongsTo('Shop\Users\User', 'user_id');
    }

    public function commenter()
    {
        return $this->belongsTo('Shop\Users\User', 'commenter_id');
    }

}