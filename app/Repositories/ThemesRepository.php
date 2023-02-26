<?php

namespace App\Repositories;

use App\Models\Themes;

/**
 * Class ThemesRepository.
 */
class ThemesRepository extends BaseRepository
{

    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Themes::class;
    }

    public function destroy($id)
    {
        return Themes::where('id', $id)->delete();
    }

    public function create(array $data)
    {
        return Themes::create($data);
    }

    public function show($id)
    {
        $query = $this->model->query();

        require $query->where('id', $id)->get();
    }

    public function getListThemes()
    {
        $query = $this->model->query();

        $query = $query->orderBy('id', 'DESC');

        return $query->get();
    }
}
