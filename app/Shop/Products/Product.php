<?php namespace Shop\Products;

class Product extends \Eloquent {
	protected $fillable = ['name', 'price'];

    public function user()
    {
        return $this->belongsTo('Shop\Users\User');
    }

}