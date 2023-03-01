<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ThemesRepository;

class AdminController extends Controller
{
    private ThemesRepository $themesRepository;

    public function __construct(
        ThemesRepository $themesRepository,
    ) {
        $this->themesRepository = $themesRepository;
    }

    public function viewDashBoard()
    {
        $themes = $this->themesRepository->getListThemes();
        $slideNumber = config('slide.page');

        return view('admin.themes.index', compact('themes', 'slideNumber'));
    }

    public function saveSlide(Request $request)
    {
        if ($request->file()) {
            $path = '/uploads/slide';
            $image = $request->file('img');
            $image_name = $image->getClientOriginalName();
            $image_add = $image_name . "_" . time();
            $image->move(public_path($path), $image_add);

            $data['type'] = 'slide';
            $data['name'] = $image_name;
            $data['url'] = "$path/$image_add";
        }
    }
}
