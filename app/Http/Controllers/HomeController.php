<?php

namespace App\Http\Controllers;

use App\Repositories\ThemesRepository;
use App\Repositories\ConfigsRepository;

class HomeController extends Controller
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

    public function viewHome()
    {
        $slides = $this->themesRepository->getListThemesSlide();
        $sdt = $this->configsRepository->getSdt();
        $facebook = $this->configsRepository->getFacebook();
        $youtube = $this->configsRepository->getYoutube();
        $insta = $this->configsRepository->getInsta();
        $descriptions = $this->configsRepository->getDescription();
        $partners = $this->themesRepository->getListThemesPartner();

        return view('page.home', compact('slides', 'sdt', 'facebook', 'youtube', 'insta', 'descriptions', 'partners'));
    }
}
