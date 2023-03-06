<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\HomeAdvertisement;
use App\Models\SideAdvertisement;
use App\Models\TopAdvertisement;
use App\Models\UpperAdvertisement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $home_ad_data = HomeAdvertisement::where('id', 1)->first();
        $upper_ad_data = TopAdvertisement::where('id', 1)->first();
        return view('frontend.news.home', compact('home_ad_data', 'upper_ad_data'));
    }
}
