<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Exception;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.backend.skills.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('layouts.backend.skills.create');
    }

    public function getData(){
       $skills = skill::all();
        return response()->json([
            'skills'=>$skills,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
           Skill::create([
               'name' => $request->name,
               'percent' => $request->percent,
           ]);
           return response()->json([
            'done' => 'Done',
          ]);
        }
        catch(Exception $e){
            return response()->json([
                'done' => 'error',
                'error' => $e->getMessage(),
             ]);
        }
    }

    public function get_edit(Request $request){
         $skill = Skill::findOrFail($request->id);
         return response()->json([
            'id'=>$skill->id,
             'name'=>$skill->name,
             'percent'=>$skill->percent,
         ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            $skill = Skill::findOrFail($request->id);
             $skill->update([
                 'name'=>$request->name,
                 'percent'=>$request->percent,
             ]);
             return response()->json([
                 'Done'=>'updated',
             ]);
        }
        catch(Exception $e){
            return response()->json([
                'Done'=>'error',
                'error'=>$e->getMessage(),
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try{
           $skill=Skill::findOrFail($request->id);
           $skill->delete();
           return response()->json([
               'Done'=>'Deleted',
           ]);
        }
        catch(Exception $e){
            return response()->json([
                'Done'=>'error',
                'error'=>$e->getMessage(),
            ]);
        }
    }
}
