<?php

namespace App\Http\Controllers;

use App\Models\Json;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $json = Json::get();
        return $json;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $json = Json::create([
        //     'data'=>[
        //         'name'=>"Biswajit Adak",
        //         'email'=>'biswajit@gmail.com',
        //         'phone_no'=>6290132801,
        //         'age'=>56,
        //         'address'=>[
        //             'state'=>'West Bengal',
        //             'city'=>'Kolkata',
        //             'area'=>'Garden Reach',
        //             'pin_code'=>700024
        //         ]
        //     ]
        // ]);

        // $json = Json::where('id',2)->update([
        //     'data->address->area'=>'Garden Reach Boxing Club'
        // ]);

        $json = Json::find(2);
        $json->data = collect($json->data)->forget('area');
        $json->save();

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
    public function show(Json $json)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Json $json)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Json $json)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Json $json)
    {
        //
    }
}
