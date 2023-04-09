<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\State;
use App\Http\Requests\StoreDistrictRequest;
use App\Http\Requests\UpdateDistrictRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Http\Resources\DistrictResource;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDistrictRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(District $district): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(District $district): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDistrictRequest $request, District $district): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(District $district): RedirectResponse
    {
        //
    }

    public function all_districts(){
        $districts = District::get();
        return DistrictResource::collection($districts);
    }

    public function get_district_by_id($district_id){
        $district = District::find($district_id);
        return new DistrictResource($district);
    }

    public function get_district_by_state($state_id){
        $districts = State::find($state_id)->districts;
        return DistrictResource::collection($districts);
    }
}
