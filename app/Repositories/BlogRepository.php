<?php

namespace App\Repositories;

use App\Models\Blog;

/**
 * Class BlogRepository.
 */
class BlogRepository extends BaseRepository
{

    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Blog::class;
    }

    public function destroy($id)
    {
        return Blog::where('id', $id)->delete();
    }

    public function create(array $data)
    {
        return Blog::create($data);
    }

    public function show($id)
    {
        $query = $this->model->query();

        require $query->where('id', $id)->get();
    }

    public function getListBlog($filter = [])
    {
        $query = $this->model->query();

        $limit = isset($filter['limit']) ? (int) $filter['limit'] : config('paginate.limit-default');

        if (isset($filter['title'])) {
            $query = $query->where('title', 'like', '%' . $filter['title'] . '%');
        }

        if (isset($filter['description'])) {
            $query = $query->where('description', 'like', '%' . $filter['description'] . '%');
        }

        if (isset($filter['author'])) {
            $query = $query->where('author', 'like', '%' . $filter['author'] . '%');
        }

        $query = $query->orderBy('id', 'DESC');

        return $query->paginate($limit);
    }

    public function getBlogByTitle($title)
    {
        $query = $this->model->query();

        $query = $query->where('title', $title);

        return $query->first();
    }

    public function getListBlogExpectTitle($title)
    {
        $query = $this->model->query();

        $query = $query->where('title', '!=', $title);

        return $query->get();
    }
}
