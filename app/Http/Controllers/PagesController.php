<?php
    /**
     * Created by PhpStorm.
     * User: Keir-Desktop
     * Date: 4/6/2018
     * Time: 10:09 PM
     */
    
    namespace App\Http\Controllers;
    
    
    class PagesController extends Controller
    {
        protected function contact()
        {
            return view('pages.contactus');
        }
    }