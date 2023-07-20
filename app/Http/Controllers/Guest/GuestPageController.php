<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class GuestPageController extends Controller {
    public function home() {
        $movies = Movie::all();
        return compact('movies');
    }
}