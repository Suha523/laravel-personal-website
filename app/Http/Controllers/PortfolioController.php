<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.backend.portfolio.index');
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

      //  Storage::disk('local')->put($request->thumbnail, 'portfolio_thumbnails');

        try{
            // $request->validate([
            //     'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            // ]);
            $request->thumbnail->store('portfolio_thumbnails', 'public');

            Portfolio::create([
                'title'=>['en' => $request->title_en, 'ar' => $request->title_ar],
                'link'=>$request->link,
                'thumbnail'=>$request->thumbnail->hashName(),
                'service_id'=>$request->service_id,
            ]);

            return response()->json([
                'done'=>'inserted',
            ]);

        }

        catch(Exception $e){
            return response()->json([
                'done'=>'error',
                'error'=>$e->getMessage(),
            ]);
        }
    }

    public function get(){
        // $portfolios = Portfolio::with('service')->get();
        $portfolios = Portfolio::with('service')->offset(0)->limit(3)->get();
        return response()->json([
            'portfolios'=>$portfolios,
        ]);
    }

    public function getAll(){
        $portfolios = Portfolio::with('service')->get();
        return response()->json([
            'portfolios'=>$portfolios,
        ]);
    }

    public function show_all(){
        return view('layouts.frontend.allPortfolios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
         try{

            $portfolio =  Portfolio::findOrFail($request->id);
            $thumb = $portfolio->thumbnail;
            $portfolio->delete();
            File::delete(public_path("storage/portfolio_thumbnails/$thumb"));

            return response()->json([
                    'done' => 'deleted',
             ]);

         }
         catch(Exception $e){
             return response()->json([
                 'done' => 'error',
                 'error' => $e->getMessage(),
             ]);
         }
    }
}
