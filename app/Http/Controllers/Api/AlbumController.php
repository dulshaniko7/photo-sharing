<?php

namespace App\Http\Controllers\Api;

use App\Album;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use JWTAuth;


class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $albums = Album::with('category')->where('user_id',Auth::user()->id)->get();
     return $albums;
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);

        $imageName = $request->image->getClientOriginalName();
        $request->image->move(public_path('album'), $imageName);
        $album = Album::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->name),
            'user_id' => $request->user_id,
            'image' => $imageName,
        ]);

        $id = $album->id;
        return response()->json(['id' => $id]);


        /*
                    $imageName = $request->image->getClientOriginalName();
                    $request->image->storeAs('public',$imageName);
                    return "done dfgfgf";
        */

    }

    //  public function upload(Request $request){
//
    //  }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
