<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Email;
use App\Mail\NewLead;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validate = Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|max:255|email|unique:emails',
            'content' => 'required'
        ]);

        if($validate->fails()){
            return response()->json([
                'status' => false,
                'errors' => $validate->errors()
            ], 400);
        }

        $email = Email::create($data);

        Mail::to('info@boolpress.boolean')->send(new NewLead($email));

        return response()->json([
            'result' => $email,
            'status' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
        //
    }
}
