<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Services\ThirdPartyApiService;
use App\Transformers\GeneralTransofmer;
use Illuminate\Http\Request;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ThirdPartyApiService $api)
    {
        $response = $api->get('trending/tv/week');
        $data = GeneralTransofmer::transform($response);
        return $this->successResponse($data, code: 200);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, ThirdPartyApiService $api)
    {
        $data = $api->get("tv/{$id}?append_to_response=videos,credits,images");
        return $this->successResponse($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
