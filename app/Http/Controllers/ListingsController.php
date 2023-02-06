<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Listing;

class ListingsController extends Controller
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
        //Show form to create new listing
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Store new data from create form
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'website' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer',
            'bio' => 'required',
        ]);

        $listing = new Listing();
        $listing->user_id = Auth::id();
        $listing->listings_name = $request->input('name');
        $listing->listings_address = $request->input('address');
        $listing->listings_website = $request->input('website');
        $listing->listings_email = $request->input('email');
        $listing->listings_phone = $request->input('phone');
        $listing->listings_bio = $request->input('bio');
        $listing->save();

        return redirect()->to('/home')->with('success', 'Successfully added new listing!');
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
        $listing = Listing::find($id);

        
        //Edit listings
        return view('edit')->with('listing', $listing);
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
        //Once data is updated in the DB
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'website' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer',
            'bio' => 'required',
        ]);

        //retrieve listing you need to update
        $listing = Listing::find($id);
        $listing->listings_name = $request->input('name');
        $listing->listings_address = $request->input('address');
        $listing->listings_website = $request->input('website');
        $listing->listings_email = $request->input('email');
        $listing->listings_phone = $request->input('phone');
        $listing->listings_bio = $request->input('bio');
        $listing->save();

        return redirect()->to('/home')->with('success', 'Listing updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete Listings
        $listing = Listing::find($id);
        $listing->delete();

        return redirect()->to('/home')->with('success', 'Listing successfully removed!');
    }
}
