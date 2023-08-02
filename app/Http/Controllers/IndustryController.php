<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Country;
use App\Models\OrganizationType;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateIndustryRequest;

class IndustryController extends Controller
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
            "url" => "/industrytype",
            "label" => "Industry Type",
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

        Industry::create($validatedData);
        return redirect('/dashboard/cooperations')->with('success', 'New Industry Type has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Industry $industry)
    {
        $cooperations = $industry->cooperation;

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
    public function edit(Industry $industry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIndustryRequest $request, Industry $industry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Industry $industry)
    {
        //
    }
}
