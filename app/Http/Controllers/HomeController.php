<?php

namespace App\Http\Controllers;

use App\Repositories\ThemesRepository;
use App\Repositories\ConfigsRepository;
use App\Repositories\MembersRepository;
use App\Repositories\ServicesRepository;
use App\Repositories\WorksRepository;

class HomeController extends Controller
{
    private ThemesRepository $themesRepository;
    private ConfigsRepository $configsRepository;
    private MembersRepository $membersRepository;
    private ServicesRepository $servicesRepository;
    private WorksRepository $worksRepository;

    public function __construct(
        ThemesRepository $themesRepository,
        ConfigsRepository $configsRepository,
        MembersRepository $membersRepository,
        ServicesRepository $servicesRepository,
        WorksRepository $worksRepository,
    ) {
        $this->themesRepository = $themesRepository;
        $this->configsRepository = $configsRepository;
        $this->membersRepository = $membersRepository;
        $this->servicesRepository = $servicesRepository;
        $this->worksRepository = $worksRepository;
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
        $getDescriptionAboutUs = $this->configsRepository->getAboutUs();
        $getImageAboutUs = $this->themesRepository->getThemesAboutUs();
        $getWorks = $this->worksRepository->getWorks();

        $aboutUs = [
            'description' => '',
            'image' => ''
        ];
        $works = [];
        $countLeft = 0;
        $countRight = 0;

        if ($getDescriptionAboutUs) {
            $aboutUs['description'] = $getDescriptionAboutUs->note;
        }

        if ($getImageAboutUs) {
            $aboutUs['image'] = $getImageAboutUs->url;
        }

        foreach ($getWorks as $item) {
            if($item->type == 'film') {
                $works[$countLeft]['left'] = $item;
                $countLeft++;
            }
        }

        foreach ($getWorks as $item) {
            if($item->type == 'photography') {
                $works[$countRight]['right'] = $item;
                $countRight++;
            }
        }

        return view('page.home', compact('slides', 'sdt', 'facebook', 'youtube', 'insta', 'descriptions', 'partners', 'members', 'services', 'aboutUs', 'works'));
    }
}
