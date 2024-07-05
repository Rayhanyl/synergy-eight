<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ServicesController extends Controller
{
    public function service()
    {
        return view('services.service.index');
    }

    public function training()
    {
        return view('services.training.index');
    }
}
