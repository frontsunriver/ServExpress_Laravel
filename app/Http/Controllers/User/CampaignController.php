<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index()
    {
        return view('user.campaign.index');
    }

    public function detail(Request $request)
    {
        return view('user.campaign.detail');
    }

    public function create()
    {
        return view('user.campaign.create');
    }
}
