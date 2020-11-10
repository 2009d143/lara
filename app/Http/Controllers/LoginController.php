<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function loginAction(Request $request) {
        //Here is the shortest way of doing it.
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email'    => 'required|email',
            'password' => 'required',
        ],
        [
            'required'  => '* :attribute field is required.',
            'email'    => '* :attribute is invalid.'
        ]);
        $postRequest = $request->all();
        if( (is_array($postRequest)) && (array_key_exists("_token", $postRequest)) ) {
            $email = $postRequest["email"];
            $password = $postRequest["password"];
            $query = DB::table('users');
            $query->where('email', '=', $email);
            $query->where('password', '=', $password);
            $result = $query->get();
            if($result->count())                
                return view('welcome')->withLoggedin($result->count());
            else
                return view('login')->withLoggedin($result->count());
        }
    }
    public function registrationAction(Request $request) {
        //Here is the shortest way of doing it.
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email'    => 'required|email',
            'password' => 'required',
        ],
        [
            'required'  => 'The :attribute field is required.',
            'email'    => ':attribute is invalid'
        ]);
    }
}
