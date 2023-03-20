<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanRequest;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {

        //return Plan::all();
    }

    public function create()
    {
        return view('plan');
    }

    public function store(PlanRequest $request)
    {


        return Plan::create($request->validated());
    }

    public function show(Plan $plan)
    {
        return $plan;
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
