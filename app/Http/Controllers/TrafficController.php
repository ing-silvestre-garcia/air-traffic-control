<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Traffic;

class TrafficController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $traffic = Traffic::orderBy('type','ASC')->orderBy('size','ASC')->orderBy('created_at','ASC')->get();
        return view('api',compact('traffic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validations
        $fields = request()->validate([
            'type' => 'required',
            'size' => 'required',
        ]);

        Traffic::create([
            'type' => request('type'),
            'size' => request('size'),
            'date_created' => date('Y-m-d'),
        ]);

        //return "saved";
        return redirect()->route('api');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $traffic = Traffic::where('id', $id)->get();
       
        return view('show', [
            'traffic' => $traffic
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Traffic::whereId($id)->update([
            'type' => request('type'),
            'size' => request('size'),
        ]);
        return redirect()->route('api');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $traffic = Traffic::whereId($id)->delete();
       
        return view('api');
    }
}
