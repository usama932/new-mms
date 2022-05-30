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
    public function getDownload($attachments)
    {
        dd("as");
        $file = public_path($attachments);
        return Response::download($file);
    }
}
