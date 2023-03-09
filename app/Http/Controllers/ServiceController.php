<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ServicesRepository;
use App\Http\Requests\ServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Services;

class ServiceController extends Controller
{
    private ServicesRepository $serviceRepository;

    public function __construct(
        ServicesRepository $serviceRepository
    ) {
        $this->serviceRepository = $serviceRepository;
    }

    public function listServiceAdmin(Request $request)
    {
        $filters = [];
        if (isset($request->name)) {
            $filters['name'] = $request->name;
        }

        $service = $this->serviceRepository->getListService($filters);

        return view('admin.service.index', compact('service'));
    }

    public function createService()
    {
        return view('admin.service.create');
    }

    public function viewUpdateService(Services $service)
    {
        return view('admin.service.update', compact('service'));
    }

    public function updateService(UpdateServiceRequest $request, Services $service)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'url' => $request->url,
        ];

        $isUpdated = $this->serviceRepository->updateById($service->id, $data);
        if ($isUpdated) {
            alert()->success('Thành công!', 'Cập nhật ' . $request->name . ' thành công!');
        } else {
            alert()->warning('Cảnh báo!', 'Cập nhật dịch vụ lỗi!');
        }

        return redirect()->route('admin.services.index');
    }

    public function storeService(ServiceRequest $request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'url' => $request->url,
        ];

        if (strpos($data['url'], 'youtube.com')) {
            $parts = parse_url($data['url']);
            parse_str($parts['query'], $query);
            $data['url'] = 'https://www.youtube.com/embed/'. $query['v'];
        }

        $service = $this->serviceRepository->create($data);

        if ($service instanceof Services) {
            alert()->success('Thành công!', 'Tạo dịch vụ thành công!');
        } else {
            alert()->warning('Cảnh báo!', 'Tạo dịch vụ lỗi!');
        }

        return redirect()->route('admin.services.index');
    }

    public function deleteService(int $serviceId = 0)
    {
        if (request()->get('id')) {
            $serviceId = (int) request()->get('id');
        }

        $this->serviceRepository->deleteById($serviceId);

        alert()->success('Thành công!', 'Xóa dịch vụ thành công!');
        return redirect()->route('admin.services.index');
    }
}
