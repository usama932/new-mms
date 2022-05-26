<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Response;
use DB;
use File;

class downloadController extends Controller
{
    public function getDownload($image)
    {

        $file = public_path($image);
        return Response::download($file);
    }
}
