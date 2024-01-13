<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ConfigurationController extends Controller
{
    public function configuration(): \Inertia\Response
    {
        return Inertia::render('configuracion/Configuration');
    }
}
