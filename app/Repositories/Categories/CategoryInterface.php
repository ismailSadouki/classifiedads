<?php

namespace App\Repositories\Categories;

interface CategoryInterface
{
    public function all();

    public function store($request);

    public function update($request, $id);

    public function delete($id);
}

?>