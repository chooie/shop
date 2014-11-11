<?php namespace Shop\Products;

use Laracasts\Presenter\Presenter;

class ProductPresenter extends Presenter {

    /**
     * Display how long it's been since the publish date.
     * @return mixed
     */
    public function timeSincePublished()
    {
        return $this->created_at->diffForHumans();
    }
}