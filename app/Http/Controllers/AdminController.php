<?php

namespace App\Http\Controllers;

use App\Models\Themes;
use App\Repositories\ConfigsRepository;
use Illuminate\Http\Request;
use App\Repositories\ThemesRepository;

class AdminController extends Controller
{
    private ThemesRepository $themesRepository;
    private ConfigsRepository $configsRepository;

    public function __construct(
        ThemesRepository $themesRepository,
        ConfigsRepository $configsRepository,
    ) {
        $this->themesRepository = $themesRepository;
        $this->configsRepository = $configsRepository;
    }

    public function viewDashBoard()
    {
        $themeSlides = $this->themesRepository->getListThemesSlide();
        $description = $this->configsRepository->getDescription();
        $themePartners = $this->themesRepository->getListThemesPartner();
        $slideNumber = config('slide.page');
        $sdt = $this->configsRepository->getSdt();
        $facebook = $this->configsRepository->getFacebook();
        $youtube = $this->configsRepository->getYoutube();
        $insta = $this->configsRepository->getInsta();
        $getDescriptionAboutUs = $this->configsRepository->getAboutUs();
        $getImageAboutUs = $this->themesRepository->getThemesAboutUs();

        $aboutUs = [
            'description' => '',
            'image' => ''
        ];

        if($getDescriptionAboutUs) {
            $aboutUs['description'] = $getDescriptionAboutUs->note;
        }

        if($getImageAboutUs) {
            $aboutUs['image'] = $getImageAboutUs->url;
        }

        return view('admin.themes.index', compact('themeSlides', 'slideNumber', 'description', 'themePartners', 'sdt', 'facebook', 'youtube', 'insta', 'aboutUs'));
    }

    public function saveSlide(Request $request)
    {
        if ($request->file()) {
            $path = '/uploads/slide';
            $image = $request->file('img');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path($path), $image_name);

            $data['url'] = "$path/$image_name";
        }

        $isUpdated = $this->themesRepository->updateById($request->id, $data);
        if ($isUpdated) {
            alert()->success('Thành công!', 'Cập nhật slide thành công!');
        } else {
            alert()->warning('Cảnh báo!', 'Cập nhật slide lỗi!');
        }

        return redirect()->route('dashboard');
    }

    public function saveDescription(Request $request)
    {
        $data = [
            'note' => $request->description,
        ];

        $getDescription = $this->configsRepository->getDescription();
        if ($getDescription->isNotEmpty()) {
            $isUpdated = $this->configsRepository->updateById($getDescription[0]->id, $data);
        } else {
            $data['type'] = 'description';
            $isUpdated = $this->configsRepository->create($data);
        }

        if ($isUpdated) {
            alert()->success('Thành công!', 'Cập nhật description thành công!');
        } else {
            alert()->warning('Cảnh báo!', 'Cập nhật description lỗi!');
        }

        return redirect()->route('dashboard');
    }

    public function createPartner()
    {
        $getPartner = $this->themesRepository->getListThemesPartner();

        if (count($getPartner) >= 6) {
            alert()->warning('Cảnh báo!', 'Không thể tạo quá 6 partner!');
        } else {
            $number = count($getPartner);
            $data = [
                'name' => 'Partner ' . $number,
                'type' => 'partner',
                'url' => 'img/115x24.png',
            ];

            $this->themesRepository->create($data);

            alert()->success('Thành công!', 'Thêm partner thành công!');
        }

        return redirect()->route('dashboard');
    }

    public function savePartner(Request $request)
    {
        if ($request->file()) {
            $path = '/uploads/partner';
            $image = $request->file('img');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path($path), $image_name);

            $data['url'] = "$path/$image_name";
        }

        $isUpdated = $this->themesRepository->updateById($request->id, $data);
        if ($isUpdated) {
            alert()->success('Thành công!', 'Cập nhật partner thành công!');
        } else {
            alert()->warning('Cảnh báo!', 'Cập nhật sản phẩm lỗi!');
        }

        return redirect()->route('dashboard');
    }

    public function deletePartner(Request $request)
    {
        $isUpdated = $this->themesRepository->destroy($request->id);

        if ($isUpdated) {
            alert()->success('Thành công!', 'Xóa partner thành công!');
        } else {
            alert()->warning('Cảnh báo!', 'Xóa partner thất bại!');
        }

        return redirect()->route('dashboard');
    }

    public function saveSocial(Request $request)
    {
        $data['note'] = $request->social;

        if ($request->id) {
            $configs = $this->configsRepository->getById($request->id);
            $isUpdated = $this->configsRepository->updateById($request->id, $data);
        } else {
            $configs = $this->configsRepository->getByType($request->type);
            $isUpdated = $this->configsRepository->getByType($request->type)->update($data);
        }

        if ($isUpdated) {
            alert()->success('Thành công!', 'Cập nhật ' . $configs->type .  ' thành công!');
        } else {
            alert()->warning('Cảnh báo!', 'Cập nhật ' . $configs->type .  ' lỗi!');
        }

        return redirect()->route('dashboard');
    }

    public function saveAboutUs(Request $request)
    {
        $dataConfigs = [
            'type' => 'about-us',
            'note' => $request->description
        ];

        if ($request->file()) {
            $path = '/uploads/about-us';
            $image = $request->file('img');
            $image_name = $image->getClientOriginalName();
            $image_add = $image_name . "_" . time();
            $image->move(public_path($path), $image_add);

            $dataThemes = [
                'name' => $image_name,
                'type' => 'about-us',
                'url' => "$path/$image_add"
            ];

            $aboutUsConfigs = $this->configsRepository->getAboutUs();
            $aboutUsThemes = $this->themesRepository->getThemesAboutUs();

            if ($aboutUsConfigs) {
                $configs = $this->configsRepository->updateById($aboutUsConfigs->id, $dataConfigs);
            } else {
                $configs = $this->configsRepository->create($dataConfigs);
            }

            if ($aboutUsThemes) {
                $themes = $this->themesRepository->updateById($aboutUsThemes->id, $dataThemes);
            } else {
                $themes = $this->themesRepository->create($dataThemes);
            }

            if ($configs and $themes) {
                alert()->success('Thành công!', 'Thay đổi thành công!');
            } else {
                alert()->warning('Cảnh báo!', 'Thay đổi lỗi!');
            }

            return redirect()->route('dashboard');
        }

        $aboutUs = $this->configsRepository->getAboutUs();
        if ($aboutUs) {
            $configs = $this->configsRepository->updateById($aboutUs->id, $dataConfigs);

            if ($configs) {
                alert()->success('Thành công!', 'Thay đổi thành công!');
            } else {
                alert()->warning('Cảnh báo!', 'Thay đổi lỗi!');
            }
        } else {
            $configs = $this->configsRepository->create($dataConfigs);
            if ($configs instanceof Configs) {
                alert()->success('Thành công!', 'Thay đổi thành công!');
            } else {
                alert()->warning('Cảnh báo!', 'Thay đổi lỗi!');
            }
        }

        return redirect()->route('dashboard');
    }
}
