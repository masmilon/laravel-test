<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Indianvisa;
use Illuminate\Http\Request;

class IndianvisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicants = Indianvisa::all();
        return response()->json([
            'status' => true,
            'all'=> $applicants,
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Indianvisa  $indianvisa
     * @return \Illuminate\Http\Response
     */
    public function show(Indianvisa $indianvisa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Indianvisa  $indianvisa
     * @return \Illuminate\Http\Response
     */
    public function edit(Indianvisa $indianvisa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Indianvisa  $indianvisa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Indianvisa $indianvisa)
    {
        //
    }

    public function add(Request $request)
    {
        // dd($request->all());

        $applicant = Indianvisa::create($request->all());

        return response()->json([
            'status' => true,
            'message'=> 'Applicant added successfully',
            'applicant' => $applicant,
        ], 200);
    }

    // upgrade indian visa
    public function update(Request $request){
        $applicant = Indianvisa::find($request->id);
        if($applicant){
            $applicant->update($request->all());
            return response()->json([
                'status' => true,
                'message'=> 'Applicant updated successfully']);
        }
        return response()->json([
            'status' => false,
            'message'=> 'Applicant not found',
            'id'=>$request->id,
        ]);

    }
    
    // Search visa
    public function search(Request $request){
        $applicants = Indianvisa::where('passportNo', $request->passport)->get();


        if($applicants && count($applicants)> 0){
            return response()->json([
                'status' => true,
                'applicants'=> $applicants,
            ]);
        }
        
        return response()->json([
            'status' => false,
            'message'=> 'Applicant not found',
        ]);


    }

    // Delete visa
    public function delete(Request $request){
        $applicant = Indianvisa::find($request->id);
        if($applicant){
            $applicant->delete();
            return response()->json([
                'status' => true,
                'message'=> 'Applicant deleted successfully',
            ]);
        }
        return response()->json([
            'status' => false,
            'message'=> 'Applicant not found',
            'id'=>$request->id,
        ]);

    }

    // Get last 5 visa
    public function last_visas(Request $request){
        $applicants = Indianvisa::orderBy('id', 'desc')->take($request->total)->get();

        if($applicants && count($applicants)> 0){
            return response()->json([
                'status' => true,
                'applicants'=> $applicants,
            ]);
        }
        
        return response()->json([
            'status' => false,
            'message'=> 'Applicant not found',
        ]);

    }
    
}