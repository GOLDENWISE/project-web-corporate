<?php

namespace App\Http\Controllers;

use App\Models\Cooperation;
use App\Models\Country;
use App\Models\Industry;
use App\Models\OrganizationType;
use App\Http\Requests\StoreCooperationRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCooperationRequest; 

class CooperationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() { 

        return view('home', [

            "cooperations" => Cooperation::latest()->name(request(['search']))->paginate(7)->withQueryString(),
            "cssfilename" => 'style',
            "countries" => Country::all(),
            "industries" => Industry::all(),
            "organizations" => OrganizationType::all()

        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
    public function show(Cooperation $cooperation)
    {
        return view('detail',[
            "cooperation" => $cooperation,
            "cssfilename" => 'style',
            "countries" => Country::all(),
            "industries" => Industry::all(),
            "organizations" => OrganizationType::all()
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cooperation $cooperation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCooperationRequest $request, Cooperation $cooperation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cooperation $cooperation)
    {
        //
    }
}
