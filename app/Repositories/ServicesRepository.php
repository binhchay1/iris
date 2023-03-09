<?php

namespace App\Repositories;

use App\Models\Services;

/**
 * Class ServicesRepository.
 */
class ServicesRepository extends BaseRepository
{

    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Services::class;
    }

    public function destroy($id)
    {
        return Services::where('id', $id)->delete();
    }

    public function create(array $data)
    {
        return Services::create($data);
    }

    public function show($id)
    {
        $query = $this->model->query();

        require $query->where('id', $id)->get();
    }

    public function getListService($filter = [])
    {
        $query = $this->model->query();

        $limit = isset($filter['limit']) ? (int) $filter['limit'] : config('paginate.limit-default');

        if (isset($filter['name'])) {
            $query = $query->where('name', 'like', '%' . $filter['name'] . '%');
        }

        $query = $query->orderBy('id', 'DESC');

        return $query->paginate($limit);
    }

    public function getAll()
    {
        return $this->model->query()->get();
    }
}
