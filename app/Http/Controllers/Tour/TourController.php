<?php

namespace App\Http\Controllers\Tour;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    public function index() {
        return view('admin.tour.index');
    }
}
