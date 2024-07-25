<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'company' => 'required',
            'location' => 'required',
            'email' => 'required',
            'website' => 'required',
            'description' => 'required',
        ]);

        $listing = new Listing();
        $listing->title = $request['title'];
        $listing->tags = $request['tags'];
        $listing->company = $request['company'];
        $listing->location = $request['location'];
        $listing->email = $request['email'];
        $listing->website = $request['website'];
        $listing->description = $request['description'];
        $listing->save();
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
