<?php

namespace App\Http\Controllers;

use App\Models\SubServices;
use Exception;
use Illuminate\Http\Request;

class SubServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.backend.sub_services.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


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

        SubServices::create([
            'name'=>['en' => $request->name_en, 'ar' => $request->name_ar],
            'service_id'=>$request->service_id,

        ]);
        return response()->json([
            'done'=>'added',
        ]);

       }
       catch(Exception $e){
           return response()->json([
               'done' =>'error',
               'error' =>$e->getMessage(),
           ]);
       }
    }

    public function get(){
        $sub_services = SubServices::with('service')->get();
        return response()->json([
            'sub_services'=>$sub_services,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubServices  $subServices
     * @return \Illuminate\Http\Response
     */
    public function show(SubServices $subServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubServices  $subServices
     * @return \Illuminate\Http\Response
     */
    public function edit(SubServices $subServices)
    {
        //
    }

    public function get_edit(Request $request){
        $sub_service = SubServices::findOrFail($request->id);
          return response()->json([
              'id'=>$sub_service->id,
              'name_ar'=>$sub_service->getTranslation('name','ar'),
              'name_en'=>$sub_service->getTranslation('name','en'),
              'service_id'=>$sub_service->service_id,
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubServices  $subServices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            $sub_service=SubServices::findOrFail($request->id);
            $sub_service->update([
                'name'=>['en' => $request->name_en, 'ar' => $request->name_ar],
                'service_id'=>$request->service_id,
            ]);
            return response()->json([
                'done'=>'Done',
            ]);
        }
        catch(Exception $e){
           return response()->json([
               'done'=>'error',
               'error'=>$e->getMessage(),
           ]);
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubServices  $subServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try{
            $sub_service=SubServices::findOrFail($request->id);
            $sub_service->delete();
            return response()->json([
                'done'=>'Deleted',
            ]);
         }
         catch(Exception $e){
          return response()->json([
             'done'=>'error',
             'error'=>$e->getMessage(),
         ]);
         }
    }
}
