<?php

namespace App\Http\Controllers\Site;

use App\Models\Blog;
use App\Models\Team;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Service;
use App\Models\Institute;
use App\Models\Regulations;
use Illuminate\Http\Request;
use App\Http\Middleware\Lang;
use App\Models\LanguageStudy;
use App\Models\StudyDestination;
use App\Settings\GeneralSettings;
use App\Models\RegulationCategory;
use App\Models\TouristDestination;
use App\Http\Controllers\Controller;

class StaticPageController extends Controller
{
    public function about()
    {
        $teams = Team::all();
        return view('site.about', compact('teams'));
    }





    public function partners()
    {
        $partners = Partner::all();
        return view('site.partners.index', compact('partners'));
    }

    public function regulations()
    {
        $regulationsCategory = RegulationCategory::whereHas('regulations')->withCount('regulations')->latest()->get();

        return view('site.regulations.index', compact('regulationsCategory'));
    }

    public function contracts_platform()
    {
        $contracts = Institute::all();
        return view('site.contracts_platform', compact('contracts'));
    }


    public function contact()
    {
        return view('site.contact');
    }
}
