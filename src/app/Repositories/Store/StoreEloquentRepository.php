<?php
namespace Dreamcode\Goe\App\Repositories\Store;

use Dreamcode\Goe\App\Repositories\EloquentRepository;

class StoreEloquentRepository extends EloquentRepository implements StoreRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \Dreamcode\Goe\App\Repositories\Store\StoreModel::class;
    }

    /**
     * Get all posts only published
     * @return mixed
     */
    public function getAllPublished()
    {
        $result = $this->model->where('is_published', 1)->get();
        return $result;
    }

    /**
     * Get post only published
     * @param $id int Post ID
     * @return mixed
     */
    public function findOnlyPublished($id)
    {
        $result = $this
            ->model
            ->where('id', $id)
            ->where('is_published', 1)
            ->first();

        return $result;
    }
}