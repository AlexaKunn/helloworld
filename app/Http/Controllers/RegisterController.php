<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registered_Users;

class RegisterController extends Controller
{
      /**
    * index() - register form
    *
    * used to display the register form
    *
    *
    * @return view
    *
    */

    public function index()
    {
      return view('hello.register');
    }
    /**
    * create() - creates a user
    *
    * used to cretae a user
    *
    * @return view
    *
    */

    public function create(Request $request)
    {
       $this->validate($request,[
         'first_name' => 'required|string|min:2|max:80',
         'last_name' => 'required|string|min:2|max:80',
         'address_1' => 'required|string|min:2',
         'address_2' => 'nullable|string|min:2',
         'city'    => 'required|string|min:2',
         'state' => 'required|string|min:2',
         'zip' =>'required|numeric',
         'country' => 'required|string',
       ]);

       if(!in_array(strlen($request->zip),[5,9]))
       {

          return back()->with('warning','Zip code should be 5 or 9 digits');
        }


       if(Registered_Users::create($request->all()))
       {
          return view('hello.confirm');
       }

    }
    /**
    * report() - displays a report
    *
    * used to display data of existing users
    *
    * @return view
    *
    */

    public function report()
    {
      $users = Registered_Users::orderBy('created_at', 'desc')->get();

      return view('hello.report')->with('users',$users);

    }



}
