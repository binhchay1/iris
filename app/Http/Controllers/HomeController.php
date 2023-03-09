<?php

namespace App\Http\Controllers;

use App\Repositories\ThemesRepository;
use App\Repositories\ConfigsRepository;
use App\Repositories\MembersRepository;
use App\Repositories\ServicesRepository;

class HomeController extends Controller
{
    private ThemesRepository $themesRepository;
    private ConfigsRepository $configsRepository;

    public function __construct(
        ThemesRepository $themesRepository,
        ConfigsRepository $configsRepository,
        MembersRepository $membersRepository,
        ServicesRepository $servicesRepository,
    ) {
        $this->themesRepository = $themesRepository;
        $this->configsRepository = $configsRepository;
        $this->membersRepository = $membersRepository;
        $this->servicesRepository = $servicesRepository;
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
        $members = $this->membersRepository->getListMember();
        $services = $this->servicesRepository->getListService();

        return view('page.home', compact('slides', 'sdt', 'facebook', 'youtube', 'insta', 'descriptions', 'partners', 'members', 'services'));
    }
}
