<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Skill;
use Exception;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.backend.services.index');
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

    public function getPort(Request $request){
      $services = Service::with('portfolio')->findOrFail($request->id);
               return response()->json([
                  'services'=>$services,
               ]);
    }

    public function get(){
        $services = Service::with('sub_service')->get();
               return response()->json([
                  'services'=>$services,
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
           Service::create([
            'name'=>['en' => $request->name_en, 'ar' => $request->name_ar],
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
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    public function get_edit(Request $request){
        $service = Service::findOrFail($request->id);
          return response()->json([
              'id'=>$service->id,
              'name_ar'=>$service->getTranslation('name','ar'),
              'name_en'=>$service->getTranslation('name','en'),
              'status'=>$service->status,
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            $service=Service::findOrFail($request->id);
            $service->update([
                'name'=>['en' => $request->name_en, 'ar' => $request->name_ar],
                'status'=>$request->status,
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
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try{
           $service=Service::findOrFail($request->id);
           $service->delete();
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
