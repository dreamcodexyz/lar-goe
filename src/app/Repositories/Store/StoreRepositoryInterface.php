<?php
namespace Dreamcode\Goe\App\Repositories\Store;

interface StoreRepositoryInterface
{
    /**
     * Make Model
     * @return mixed
     */
    public function makeModel();

    /**
     * get Model
     * @return mixed
     */
    public function getModel();

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