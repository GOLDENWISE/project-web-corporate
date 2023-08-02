<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Industry;
use App\Models\OrganizationType;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCountryRequest;
use App\Models\Cooperation;

class CountryController extends Controller
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
    public function create()
    {
        return view('createcategories', [
            "cssfilename" => 'style',
            "url" => "/country",
            "label" => "Country",
            "countries" => Country::all(),
            "industries" => Industry::all(),
            "organizations" => OrganizationType::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:25'
        ]);

        Country::create($validatedData);
        return redirect('/dashboard/cooperations')->with('success', 'New Country has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        $cooperations = $country->cooperation;

        return view('filter', [
            "cooperations" => $cooperations,
            "cssfilename" => 'style',
            "countries" => Country::all(),
            "industries" => Industry::all(),
            "organizations" => OrganizationType::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        //
    }
}
