<?php

namespace App\Http\Controllers;

use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function __constructor() {
        $this->middleware(['auth']);
    }
    public function index() {
        return view('dashboard');
    }
}
