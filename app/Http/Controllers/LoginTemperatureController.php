<?php

namespace App\Http\Controllers;

use App\Models\LoginTemperature;
use App\Http\Requests\StoreLoginTemperatureRequest;
use App\Http\Requests\UpdateLoginTemperatureRequest;
use App\Repositories\Contracts\LoginTemperatureRepositoryInterface;

class LoginTemperatureController extends Controller
{

    /**
     * @var LoginTemperatureRepositoryInterface
     */
    private $repository;

    public function __construct(LoginTemperatureRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param \App\Http\Requests\StoreLoginTemperatureRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoginTemperatureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\LoginTemperature $loginTemperature
     * @return \Illuminate\Http\Response
     */
    public function show(LoginTemperature $loginTemperature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\LoginTemperature $loginTemperature
     * @return \Illuminate\Http\Response
     */
    public function edit(LoginTemperature $loginTemperature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateLoginTemperatureRequest $request
     * @param \App\Models\LoginTemperature $loginTemperature
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoginTemperatureRequest $request, LoginTemperature $loginTemperature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\LoginTemperature $loginTemperature
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoginTemperature $loginTemperature)
    {
        //
    }
}
