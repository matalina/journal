<?php

namespace App\Http\Controllers\RapidLogging;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RapidLogging\BulletStoreRequest;
use App\Models\Bullet;

class BulletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BulletStoreRequest $request)
    {
        $bullet = Bullet::create([
            'content' => $request->get('content'),
            'type_id' => $request->get('type_id'),
            'date' => $request->get('date'),
            'signifier' => $request->get('signifier', null),
        ]);

        return response()->json([
            'success' => 1,
            'message' => 'Added bullet.',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
