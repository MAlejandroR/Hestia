<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHestiaUserRequest;
use App\Http\Requests\UpdateHestiaUserRequest;
use App\Models\HestiaUser;
use Inertia\Inertia;

class HestiaUserController extends Controller
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
        return Inertia::render('UserHestia/create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHestiaUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHestiaUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HestiaUser  $hestiaUser
     * @return \Illuminate\Http\Response
     */
    public function show(HestiaUser $hestiaUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HestiaUser  $hestiaUser
     * @return \Illuminate\Http\Response
     */
    public function edit(HestiaUser $hestiaUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHestiaUserRequest  $request
     * @param  \App\Models\HestiaUser  $hestiaUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHestiaUserRequest $request, HestiaUser $hestiaUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HestiaUser  $hestiaUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(HestiaUser $hestiaUser)
    {
        //
    }
}
