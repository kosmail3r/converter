<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function getForm()
    {
        return view('converter');
    }

    public function upload(Request $request)
    {
        foreach ($request->file() as $file) {
            foreach ($file as $f) {
                $ext=substr(strrchr($f->getClientOriginalName(),'.'),1);
                echo $ext;
                $f->move(storage_path('files'), time().'_'.$f->getClientOriginalName());
            }
        }
        return "Успех";
    }
}