<?php

namespace App\Http\Controllers\admin;

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
        $link = base64_decode($image);
        $file = public_path($link);
        return Response::download($file);
    }
}
