<?php

namespace App\Http\Controllers;

class pageController extends Controller
{
    
    public function myFunction()
    {
        
        $firstname = 'Emmanuel';
        $lastname = 'Okeke';
        $fullname = $firstname.$lastname;
        
        return view('page')->with("full",$fullname) ;
        
    }
    
}