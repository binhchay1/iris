<?php

namespace App\Repositories;

use App\Models\Members;

/**
 * Class MembersRepository.
 */
class MembersRepository extends BaseRepository
{

    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Members::class;
    }

    public function destroy($id)
    {
        return Members::where('id', $id)->delete();
    }

    public function create(array $data)
    {
        return Members::create($data);
    }

    public function show($id)
    {
        $query = $this->model->query();

        require $query->where('id', $id)->get();
    }

    public function getListMember($filter = [])
    {
        $query = $this->model->query();

        $limit = isset($filter['limit']) ? (int) $filter['limit'] : config('paginate.limit-default');

        if (isset($filter['name'])) {
            $query = $query->where('name', 'like', '%' . $filter['name'] . '%');
        }

        if (isset($filter['role'])) {
            $query = $query->where('role', 'like', '%' . $filter['role'] . '%');
        }

        $query = $query->orderBy('id', 'DESC');

        return $query->paginate($limit);
    }

    public function getQuantityById($id)
    {
        $query = $this->model->query();

        return $query->where('id', $id)->with('storage')->first();
    }

    public function getAll()
    {
        return $this->model->query()->get();
    }
}
