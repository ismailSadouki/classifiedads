<?php

namespace App\Repositories\Categories;

use App\Repositories\Categories\CategoryInterface;
use App\Models\Category;

class CategoryRepository implements AdsInterface
{

    protected $Category;

    public function __construct(Category $Category)
    {
        $this->Category=$Category;
    }

}
?>