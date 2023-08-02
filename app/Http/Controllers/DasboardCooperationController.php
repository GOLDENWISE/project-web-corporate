<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\Industry;
use App\Models\OrganizationType;
use App\Models\Cooperation;
use Illuminate\Http\Request;

class DasboardCooperationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home', [

            "cooperations" => Cooperation::latest()->name(request(['search']))->paginate(5)->withQueryString(),
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
        return view('create', [
            "cssfilename" => 'style',
            "title" => "Add New Corporation",
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
            'name' => 'required|max:40',
            'country_id' => 'required',
            'organization_type_id' => 'required',
            'industry_id' => 'required',
            'description' => 'required|max:255'
        ]);

        $validatedData['cooperation_started_from'] = date("Y-m-d");

        Cooperation::create($validatedData);
        return redirect('/dashboard/cooperations')->with('success', 'New Cooperated Company has been added!');
        
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cooperation $cooperation)
    {
        return view('create', [
            'cooperation' => $cooperation,
            "countries" => Country::all(),
            "industries" => Industry::all(),
            "organizations" => OrganizationType::all(),
            "title" => "Update Corporated Company Data",
            "cssfilename" => "style"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cooperation $cooperation)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:40',
            'country_id' => 'required',
            'organization_type_id' => 'required',
            'industry_id' => 'required',
            'description' => 'required|max:255'
        ]);

        Cooperation::where('id', $cooperation->id)->update($validatedData);
        return redirect('/dashboard/cooperations')->with('success', 'Cooperated Company has been updated!');
    }
}
