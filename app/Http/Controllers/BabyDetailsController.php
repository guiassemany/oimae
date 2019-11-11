<?php

namespace App\Http\Controllers;

use App\Baby;
use Illuminate\Http\Request;

class BabyDetailsController extends Controller
{
    public function index(Baby $baby)
    {
        return view('backend.babies.details')
            ->with('baby', $baby);
    }
}
