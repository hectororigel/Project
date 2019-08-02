<?php

namespace App\Http\Controllers;

use App\Mail\ProjectCreated;
use Illuminate\Http\Request;
use App\Redcem;


class RedcemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $redcem = auth()->user()->redcem;

        $redcem = Redcem::where('owner_id', auth()->id())->get();



        return view('users.redcem', compact('redcem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $attributes = request()->validate([
            'name' => ['required', 'min:3'],
            'lastName' => ['required', 'min:4'],
            'email' => ['required', 'min:8'],
            'phoneNumber' => ['required', 'min:10'],
            'message' => ['required', 'min:5']
        ]);



      $redcem = Redcem::create($attributes + ['owner_id' => auth()-> id()]);


        \Mail::to($redcem->owner->email)->send(

            new ProjectCreated($redcem)
        );

        return redirect('/users/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $redcem = Redcem::findOrFail($id);

      /* if ($redcem->owner_id !== auth()->id()) {
           abort(403);
       }*/

        return view('users.show', compact('redcem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $redcem = Redcem::findOrFail($id);
        return view('users.edit', compact('redcem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $redcem = Redcem::findOrFail($id);

        $attributes = request()->validate([
            'name' => ['required', 'min:3'],
            'lastName' => ['required', 'min:4'],
            'email' => ['required', 'min:8'],
            'phoneNumber' => ['required', 'min:10'],
            'message' => ['required', 'min:5']
        ]);

       $redcem->update(request(['name', 'lastName',
           'email', 'phoneNumber', 'message']));

        return redirect('/redcem');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Redcem::findOrFail($id)->delete();

       return redirect('/redcem');
    }
}
