<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactUsController extends Controller {

    public function index(): View {
        return view('contact-us');
    }
}
