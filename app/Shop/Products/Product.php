<?php
namespace Shop\Products;

use Laracasts\Presenter\PresentableTrait;

class Product extends \Eloquent {

    use PresentableTrait;

    protected $fillable = ['name', 'price', 'user_id', 'image_path'];

    protected $presenter = 'Shop\Products\ProductPresenter';


    public function user()
    {
        return $this->belongsTo('Shop\Users\User');
    }

    public function comments()
    {
        return $this->hasMany('Shop\Comments\ProductComment');
    }

}