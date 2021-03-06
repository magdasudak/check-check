<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact()
    {
    	$header = 'to jest nagłówek strony Kontakt';
    	$date = 'Data: 20/03/2017';
    	$visited = 'Liczba wizyt: 3526';
    	return view('pages.contact' , compact('header' , 'date' , 'visited'));
    }
     
     public function about()
    {
        // Tutaj może Pani pobrać informacje z bazy danych i przekazać je widokowi
        //https://laravel.com/docs/5.4/views
    	return view('pages.about');
    }
}
