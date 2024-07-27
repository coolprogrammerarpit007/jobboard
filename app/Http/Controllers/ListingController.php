<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\View\View;
use Illuminate\Http\Request;
use SynergiTech\Alert\Alert;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id)
    {
        $listing = Listing::find($id);
        if ($listing) {
            return view('listing', [
                'listing' => $listing,
            ]);
        } else {
            abort('404');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show()
    {

        return view('listings', [
            'heading' => 'Latest Listings',
            'listings' => Listing::paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */


    //  Submit the gig form connected route
    public function create(Request $request)
    {
        if (Auth::check()) {
            $request->validate([
                'title' => 'required',
                'tags' => 'required',
                'company' => 'required',
                'location' => 'required',
                'email' => ['required', Rule::unique('listings')],
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
            return redirect('manage');
        } else {
            return redirect('/login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
            $listing = Listing::find($id);
            if ($listing) {
                $data = compact('listing');
                return view('edit')->with($data);
            } else {
                abort('404');
            }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(Auth::check()){

            $request->validate([
                'title' => 'required',
                'tags' => 'required',
                'company' => 'required',
                'location' => 'required',
                'email' => 'required',
                'website' => 'required',
                'description' => 'required',
            ]);
            $listing = Listing::find($id);
            if ($listing) {
                $listing->title = $request['title'];
                $listing->tags = $request['tags'];
                $listing->company = $request['company'];
                $listing->location = $request['location'];
                $listing->email = $request['email'];
                $listing->website = $request['website'];
                $listing->description = $request['description'];
                $listing->save();
                return redirect('manage');
            }
        }else {
            return redirect('/login');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(Auth::check()){
            $listing = Listing::find($id);
            if ($listing) {
                $listing->destroy($id);
                return redirect('manage');
            }
        }else{
            return redirect('/');
        }
    }
}
