<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Bem Vindo(a)!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title); //Outra alternativa pro de cima. Bom pra passar +1 valor
    }

    public function about(){
        $title = 'Sobre';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Laravel',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
