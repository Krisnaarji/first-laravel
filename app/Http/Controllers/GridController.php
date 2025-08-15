<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGridRequest;
use App\Http\Requests\UpdateGridRequest;
use App\Models\Grid;

class GridsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grids = Grid::with('constructor')->get();
        return view('grids.index', compact('grids'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGridsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Grid $grid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grid $grid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGridRequest $request, Grid $grid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grid $grids)
    {
        //
    }
}
