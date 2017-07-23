<?php
namespace Dreamcode\Goe\App\Repositories;
use Illuminate\Database\Eloquent\Model;

abstract class EloquentRepository implements RepositoryInterface
{
    private $where;
    private $orWhere;

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

    public function getAll()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        $result = $this->model->find($id);
        return $result;
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes)
    {
        $result = $this->find($id);
        if($result) {
            $result->update($attributes);
            return $result;
        }
        return false;
    }

    public function delete($id)
    {
        $result = $this->find($id);
        if($result) {
            $result->delete();
            return true;
        }

        return false;
    }

    public function where($conditions, $operator = null, $value = null)
    {
        if (func_num_args() == 2) {
            list($value, $operator) = [$operator, '='];
        }

        $this->where[] = [$conditions, $operator, $value];

        return $this;
    }

    public function orWhere($conditions, $operator = null, $value = null)
    {
        if (func_num_args() == 2) {
            list($value, $operator) = [$operator, '='];
        }

        $this->orWhere[] = [$conditions, $operator, $value];

        return $this;
    }

    public function count()
    {
        return $this->model->count();
    }

    public function get($columns = ['*'])
    {
        return $this->model->get($columns);
    }

    public function lists($column, $key = null)
    {
        return $this->model->lists($column, $key = null);
    }

    public function paginate($limit = null)
    {
        return $this->model->paginate($limit);
    }

}