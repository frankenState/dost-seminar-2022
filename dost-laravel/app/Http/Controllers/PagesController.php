<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function test() {
        $name = 'Jane Doe';
        $names = [
            'James Gosling',
            'Taylor Otwel',
            'Brendan Eich',
            'Rasmus Lerdorf',
            'Charles Babbage',
        ];

        return view('welcome', [
            'name' => $name,
            'names' => $names,
        ]);
    }
}
