<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $token = Session::get('token');
        // $base_url = config('api.base_url');

        try {
            $response = Http::withHeaders([
                'key' => 'P@s4rR4Ky@tRsK'
            ])->get('http://202.162.208.141:6001?code=GET-ALL-DATA-USER&userid=saputra&password=12345&page=0&row_per_page=0');

            return $response;
            // $response = Http::withHeaders([
            //     'Authorization' => $token
            // ])->get($base_url.'/users');
            
            // // return $response;
            // return redirect('/error-page')->with('status', 'Profile updated!');

            
        } catch (\Throwable $th) {
            return $th;
            // $massage = $th->getMessage();
            // return redirect('/error-page')->with('test' , 'oks'  );
        }

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
}
