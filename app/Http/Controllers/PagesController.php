<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PagesController extends Controller
{

    public function index(): string{
        return view('pages.index');
    }
    public function newsletter(): string{
        return view('newsletter');
    }
    // Authorization
    public function signIn(): string{
        return view('authorization.signIn');
    }

    public function signUp(): string{
        return view('authorization.signUp');
    }
    // Authorization

    // Other pages
    public function announces(): string{
        return view('pages.otherPages.announces');
    }

    public function newMovie(): string{
        return view('pages.otherPages.newMovies');
    }
    // Other pages

    public function about(): string {
        return view('pages.about');
    }

    // Single pages
    public function avengers(): string{
        return view('singlePages.avengers');
    }
    public function blackwidow(): string{
        return view('singlePages.blackwidow');
    }

    public function services(): string {
        $data = [
            'title' => 'Movies',
            'services' => [
                'Dune',
                'Spider man',
                'Hulk',
            ]
        ];
        return view('pages.services')->with($data);
    }
}
