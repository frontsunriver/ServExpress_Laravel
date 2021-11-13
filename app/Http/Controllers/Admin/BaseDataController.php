<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SearchEngin;
use App\Country;
use App\Region;

class BaseDataController extends Controller
{
    function index()
    {
        $menu = 'base';
        return view('admin.base.index', compact('menu'));
    }

    function getCountryList(Request $request){
        $start = $request->start;
        $length = $request->length;
        $country = Country::skip($start)->take($length)->get();
        $count = Country::get()->count();
        $result['data'] = $country;
        $result['recordsFiltered'] = $count;
        $result['recordsTotal'] = $count;
        return json_encode($result);
    }

    function getRegionList(Request $request)
    {
        $start = $request->start;
        $length = $request->length;
        $region = Region::skip($start)->take($length)->get();
        $count = Region::get()->count();
        $result['data'] = $region;
        $result['recordsFiltered'] = $count;
        $result['recordsTotal'] = $count;
        return json_encode($result);
    }

    function getSearchEnginList(Request $request)
    {
        $start = $request->start;
        $length = $request->length;
        $searchEngin = SearchEngin::skip($start)->take($length)->get();
        $count = SearchEngin::get()->count();
        $result['data'] = $searchEngin;
        $result['recordsFiltered'] = $count;
        $result['recordsTotal'] = $count;
        return json_encode($result);
    }
}
