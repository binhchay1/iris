<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\WorksRepository;
use App\Http\Requests\WorkRequest;
use App\Http\Requests\UpdateWorkRequest;
use App\Models\Works;

class WorkController extends Controller
{
    private WorksRepository $workRepository;

    public function __construct(
        WorksRepository $workRepository
    ) {
        $this->workRepository = $workRepository;
    }

    public function listWorkAdmin(Request $request)
    {
        $filters = [];
        if (isset($request->title)) {
            $filters['title'] = $request->title;
        }
        if (isset($request->type)) {
            $filters['type'] = $request->type;
        }

        $work = $this->workRepository->getListWork($filters);

        return view('admin.work.index', compact('work'));
    }

    public function createWork()
    {
        return view('admin.work.create');
    }

    public function viewUpdateWork(Works $work)
    {
        return view('admin.work.update', compact('work'));
    }

    public function updateWork(UpdateWorkRequest $request, Works $work)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
        ];

        if ($request->file()) {

            $path = '/uploads/work';
            $image = $request->file('img');
            $image_name = $image->getClientOriginalName();
            $image_add = $image_name . "_" . time();
            $image->move(public_path($path), $image_add);

            $data['image'] = "$path/$image_add";
        }

        $isUpdated = $this->workRepository->updateById($work->id, $data);
        if ($isUpdated) {
            alert()->success('Thành công!', 'Cập nhật ' . $request->name . ' thành công!');
        } else {
            alert()->warning('Cảnh báo!', 'Cập nhật công việc lỗi!');
        }

        return redirect()->route('admin.works.index');
    }

    public function storeWork(WorkRequest $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
        ];

        if ($request->file()) {

            $path = '/uploads/work';
            $image = $request->file('img');
            $image_name = $image->getClientOriginalName();
            $image_add = $image_name . "_" . time();
            $image->move(public_path($path), $image_add);

            $data['image'] = "$path/$image_add";
        }

        $work = $this->workRepository->create($data);

        if ($work instanceof Works) {
            alert()->success('Thành công!', 'Tạo công việc thành công!');
        } else {
            alert()->warning('Cảnh báo!', 'Tạo công việc lỗi!');
        }

        return redirect()->route('admin.works.index');
    }

    public function deleteWork(int $workId = 0)
    {
        if (request()->get('id')) {
            $workId = (int) request()->get('id');
        }

        $this->workRepository->deleteById($workId);

        alert()->success('Thành công!', 'Xóa công việc thành công!');
        return redirect()->route('admin.works.index');
    }
}
