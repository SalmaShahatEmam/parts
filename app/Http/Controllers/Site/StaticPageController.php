<?php

namespace App\Http\Controllers\Site;

use App\Models\Blog;
use App\Models\Team;
use App\Models\Feature;
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
        $features = Feature::all();

        return view('site.about', compact('features'));
    }




    public function contact()
    {
        return view('site.contact');
    }

}
