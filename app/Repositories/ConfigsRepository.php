<?php

namespace App\Repositories;

use App\Models\Configs;

/**
 * Class ConfigsRepository.
 */
class ConfigsRepository extends BaseRepository
{

    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Configs::class;
    }

    public function destroy($id)
    {
        return Configs::where('id', $id)->delete();
    }

    public function create(array $data)
    {
        return Configs::create($data);
    }

    public function show($id)
    {
        $query = $this->model->query();

        require $query->where('id', $id)->get();
    }

    public function getListConfigs()
    {
        $query = $this->model->query();

        $query = $query->orderBy('id', 'DESC');

        return $query->get();
    }

    public function getDescription()
    {
        $query = $this->model->query();

        $query = $query->where('type', 'description');

        return $query->get();
    }

    public function getFacebook()
    {
        $query = $this->model->query();

        $query = $query->where('type', 'facebook');

        return $query->get();
    }

    public function getSdt()
    {
        $query = $this->model->query();

        $query = $query->where('type', 'sdt');

        return $query->get();
    }

    public function getYoutube()
    {
        $query = $this->model->query();

        $query = $query->where('type', 'youtube');

        return $query->get();
    }

    public function getInsta()
    {
        $query = $this->model->query();

        $query = $query->where('type', 'insta');

        return $query->get();
    }

    public function getAboutUs()
    {
        $query = $this->model->query();

        $query = $query->where('type', 'about-us');

        return $query->first();
    }
}
