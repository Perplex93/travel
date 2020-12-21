<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageServiceProvider;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = People::all();

        return view('people.people', compact('people', $people));
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
        $peopleData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'age' => ['required', 'smallInteger'],
            'description' => ['required', 'longText', 'max:500'],
            'mail' => ['required', 'string','email', 'max:145'],
            'phone' => ['required', 'string', 'max:45',]
        ]);

        if ($request->hasfile('user_image')) {
            $file = $request->file('user_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('public/img/', $filename);

            $request->image = $filename;
        } else {
            return $request;
            $request->image = '';
        }
        People::create($peopleData);

       return redirect('people.people')->with('success', 'Person erfolgreich hinzugefügt!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
