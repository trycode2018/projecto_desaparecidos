<?php

namespace App\Http\Controllers;

use App\Models\Find;
use Illuminate\Http\Request;

class FindController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Find::all();
    }

    public function getId(){
        // buscar id
    }

    public function count(){
        return sizeof($this->getDesaparecidos());
    }

    public function getTotal(){
        return $this->index()->count();
    }

    public function getDesaparecidos(){
        return Find::where('status','Ativo')->get();
    }
    public function getEncontradas(){
        return Find::where('status','Inativo')->get();
    }
    public function totalEncontradas(){
        return sizeof($this->getEncontradas());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Find();
        $user->name = $request->input('name');
        $user->age = $request->input('age');
        $user->address = $request->input('address');
        $user->phone_number = $request->input('phone_number');
        $user->description = $request->input('description');

        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = $requestImage->getClientOriginalName().".".$extension;

            $request->image->move(public_path('assets/img/'),$imageName);
            $user->picture = $imageName;
        }


        $user->date = $request->date;
        $user->status = "Ativo";
        $user->save();

        return $user->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Find  $find
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $find = Find::findOrFail($id);
        return $find;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Find  $find
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoa = Find::findOrFail($id);

        return $pessoa;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Find  $find
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = $requestImage->getClientOriginalName().".".$extension;

            $request->image->move(public_path('assets/img/'),$imageName);
            $data['picture'] = $imageName;
        }

       return Find::findOrfail($request->id)->update($data);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Find  $find
     * @return \Illuminate\Http\Response
     */
    public function destroy(Find $find)
    {
        //
    }
}
