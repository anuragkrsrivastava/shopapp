<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Page;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $datas = Page::all();
        return view('pages.categories')->with('datas', $datas);
    }

    public function show($id){
        $data = Page::find($id);
        return view('pages.product-page')->with('data', $data);
    }
}
