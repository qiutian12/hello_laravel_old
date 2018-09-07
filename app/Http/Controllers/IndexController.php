<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;

class IndexController extends Controller
{
    //
    public function index()
    {
        $sites = Site::all();
        dd($sites);
    }
}
