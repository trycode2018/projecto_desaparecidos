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
        $customMessages = [
            'name.required' => 'O campo nome é obrigatório.',
            'name.alpha' => 'O campo nome deve conter apenas letras.',
            'age.required' => 'O campo idade é obrigatório.',
            'addres.required' => 'O campo endereço é obrigatório',
            'description.required' => 'O campo descriçao é obrigatório',
            'phone_number.required' => 'O campo telefone é obrigatório',
            'status.required' => 'O campo estado é obrigatório',
            'date.required' => 'O campo data é obrigatório',
            'phone_number.digits' => 'O campo telefone deve conter apenas 9 digitos',
            'picture.image' => 'O campo foto deve ser uma imagem',
            'picture.mimes' => 'O campo foto deve ser do formato (jpeg, png,jpg ou gif)',
        ];
        $request->merge(['status' => $request->input('status', 'Ativo')]);

        $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'address' => 'required|string',
            'description' => 'required|string',
            'phone_number' => 'required|digits:9',
            'status' => 'required|in:Ativo,Inativo',
            'date' => 'required|date',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],$customMessages);

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
        if(auth()->user()->permissionGranted || auth()->user()->isAdmin)
        {
            $user->save();
            return $user->id;
        }else{
            return -1;
        }

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

        $customMessages = [
            'status.required' => 'O campo status é obrigatório.',
            'description.required' => 'O campo descricao é obrigatório.',
            'address.required' => 'O campo endereco é obrigatório.',
            'phone_number.digits' => 'O campo telefone deve conter 9 digitos',
            'status.in' => 'O campo estado aceita apenas duas possibilidades Ativo(Desaparecido) / Inativo(Encontrado)'
        ];

        $request->validate([
            'status' => 'required|in:Ativo,Inativo',
            'description' => 'required|string',
            'address' => 'required|string',
            'phone_number'=>'required|integer|digits:9',
        ],$customMessages);

        $find = Find::findOrFail($request->id);
        if($find->user_id != auth()->id())
        {
            dd('Você não tem permissão para editar esta pessoa desaparecida.');
            /*return response()
            ->view('/index', compact('find'))
            ->with('mensagemErro', 'Você não tem permissão para editar esta pessoa desaparecida.')
            ->header('Content-Type', 'text/javascript');
            */
            if(auth()->user()->isAdmin){
                return Find::findOrfail($request->id)->update($data);
            }
        }else{
            return Find::findOrfail($request->id)->update($data);
        }

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
