<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StandardPageController extends Controller
{
    public function index(){
      return view('content.home');
    }

    public function publikasi(){
      return view('content.publikasi');
    }

    public function detailpublikasi(){
      return view('content.detailpublikasi');
    }

    public function detailpublikasidua(){
      return view('content.detailpublikasidua');
    }

    public function detailpublikasitiga(){
      return view('content.detailpublikasitiga');
    }

    public function profil(){
      return view('content.profil');
    }
}
