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
        $page = config('slide.page');

        return view('admin.themes.index', compact('themes', 'page'));
    }
}
