<?php

namespace App\Repositories;

use App\Models\Works;

/**
 * Class WorksRepository.
 */
class WorksRepository extends BaseRepository
{

    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Works::class;
    }

    public function destroy($id)
    {
        return Works::where('id', $id)->delete();
    }

    public function create(array $data)
    {
        return Works::create($data);
    }

    public function show($id)
    {
        $query = $this->model->query();

        require $query->where('id', $id)->get();
    }

    public function getListWork($filter = [])
    {
        $query = $this->model->query();

        $limit = isset($filter['limit']) ? (int) $filter['limit'] : config('paginate.limit-default');

        if (isset($filter['title'])) {
            $query = $query->where('title', 'like', '%' . $filter['title'] . '%');
        }

        if (isset($filter['type'])) {
            $query = $query->where('type', 'like', '%' . $filter['type'] . '%');
        }

        $query = $query->orderBy('id', 'DESC');

        return $query->paginate($limit);
    }

    public function getWorks()
    {
        $query = $this->model->query();

        $query = $query->orderBy('id', 'DESC');

        return $query->get();
    }
}
