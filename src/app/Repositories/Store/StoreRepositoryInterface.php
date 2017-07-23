<?php
namespace Dreamcode\Goe\App\Repositories\Store;

interface StoreRepositoryInterface
{

    /**
     * Get all posts only published
     * @return mixed
     */
    public function getAllPublished();

    /**
     * Get post only published
     * @param $id int Post ID
     * @return mixed
     */
    public function findOnlyPublished($id);
}