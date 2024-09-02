<?php

namespace App\Http\Controllers\Site;

use App\Models\Blog;
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
        $setting = app(GeneralSettings::class);
        return view('site.about', compact('setting'));
    }

    public function services()
    {
        $services = Service::all();

        return view('site.services');
    }

    public function projects()
    {
        $services = Project::all();

        return view('site.services');
    }
    public function blogs(){
        $blogs = Blog::all();
        return view('site.blogs');
    }

    public function partners(){
        $partners = Partner::all();
        return view('site.partners',compact('partners'));
    }

    public function regulations(){
        $category = RegulationCategory::all();
        return view('site.regulations',compact('regulations'));
    }


      public function contact()
    {
        return view('site.contact');
    }


}
