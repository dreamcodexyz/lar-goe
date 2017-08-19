<?php
namespace Dreamcode\Goe\App\Repositories;
use Illuminate\Database\Eloquent\Model;

abstract class EloquentRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->makeModel();
    }

    abstract public function getModel();

    public function makeModel()
    {
        $model = app()->make($this->getModel());

        if (!$model instanceof Model) {
            throw new \Exception("Class {$this->getModel()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }
        return $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

}