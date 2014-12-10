<?php
namespace Shop\Comments;

class ProductComment extends \Eloquent
{
    protected $fillable = ['product_id', 'commenter_id', 'body'];
    protected $table = 'product_comments';

    public function owner()
    {
        return $this->belongsTo('Shop\Products\Product', 'product_id');
    }
}