<?php

namespace App\Http\Controllers;

use App\Models\Acteur;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  display()
    {
        // dd(Acteur::orderBy('id','desc')->paginate(5));
        return view('List',['actors'=>Acteur::orderBy('id','desc')->paginate(5)]);
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
            'name'=>'required',
            'email'=>'required',
                'password'=>'required'
        ]);
        $actor=new Acteur();
        $actor->name=$request->name;
        $actor->email=$request->email;
        $actor->birthDay=$request->birthDay;
        $actor->pays=$request->pays;
        $actor->password=$request->password; 
        $actor->adresse=$request->adresse;
        $actor->save();
        
         return redirect()->route('page.list');
        
       
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('update',['item'=>Acteur::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request-> validate([
            'name'=>'required',
            'email'=>'required',
                'password'=>'required'
        ]);
        
        $actor=Acteur::find($id);
         
        $actor->name=$request->name;
        $actor->email=$request->email;
        $actor->birthDay=$request->birthDay;
        $actor->pays=$request->pays;
        $actor->password=$request->password; 
        $actor->adresse=$request->adresse;
        $actor->save();
          
        return redirect()->route('page.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        
        $actor=Acteur::find($id);
        $actor->delete();
       // dd("enregistre supprimé avec succes");
        return redirect()->route('page.list');
    }
}
