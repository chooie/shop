<?php
namespace Shop\Categories;

class Category extends \Eloquent {
	protected $fillable = ['category'];
    protected $table = 'categories';
}