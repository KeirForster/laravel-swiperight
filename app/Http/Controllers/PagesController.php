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
        /**
         * Display the view showing the contact us data
         * @param none
         * @return Response
         */
        protected function contact()
        {
            return view('pages.contactus');
        }
    
        /**
         * Display the view showing the about us data
         * @param none
         * @return Response
         */
        protected function about()
        {
            return view('pages.aboutus');
        }
    }