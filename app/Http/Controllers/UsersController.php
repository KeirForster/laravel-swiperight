<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Query\Builder;
use Igaster\LaravelCities\Geo;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
//        return $users;
        return view('users.index', compact('users'));
    }
    
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }
    
    public function create()
    {
        return view('users.create');
    }
    
    public function store()
    {
//        $input = Request::all();
//        $user = User::create($input);
//        return $input;
        
        $user = new User;
        $user->firstname = Request::get('firstname');
        $user->middlename = Request::get('middlename');
        $user->lastname = Request::get('lastname');
        $user->email = Request::get('email');
        $user->linkedinurl = Request::get('linkedinurl');
        $user->streetaddress = Request::get('street_number') . ' ' . Request::get('route');
        $user->city = Request::get('locality');
        $user->state = Request::get('administrative_area_level_1');
        $user->countryid = Request::get('country');
        $user->postalzipcode = Request::get('postal_code');
        $user->workphoneextension = Request::get('extension');
        $user->mobilephone = Request::get('phone');
        
        $user->password = '1234';
        
        $user->save();
        
        return redirect('users');
    }
}
