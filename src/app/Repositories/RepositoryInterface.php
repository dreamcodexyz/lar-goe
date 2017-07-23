<?php
namespace Dreamcode\Goe\App\Repositories;

interface RepositoryInterface
{
    public function getAll();

    public function find($id);

    public function create(array $attributes);

    public function update($id, array $attributes);

    public function delete($id);

    public function where($conditions, $operator = null, $value = null);

    public function orWhere($conditions, $operator = null, $value = null);

    public function count();

    public function get($columns = ['*']);

    public function lists($column, $key = null);

    public function paginate($perPage = 20);

}