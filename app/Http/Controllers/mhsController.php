<?php

namespace App\Http\Controllers;

use App\Models\Mhs;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class mhsController extends Controller
{
    public function show(){
        $mhs = Mhs::all();
        return view('welcome', compact('mhs'));
    }
    public function create(){
        $Fakultas=Fakultas::all();
        return view('createMhs', compact('Fakultas'));
    }
    public function store(Request $request){
        $request->validate([
            'nim'=>'required|max:10',
            'name'=>'required',
            'class'=>'required',
            'subjek'=>'required',
            'dateSubjek'=>'required|date',
            'attendance'=>'required',
            'image'=>'required|mimes:png,jpg'
        ]);

        $fileName= $request->nim.'-'. $request->name.'-'. $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $fileName);
        Mhs::create([
            'nim'=>$request->nim,
            'name'=>$request->name,
            'class'=>$request->class,
            'subjek'=>$request->subjek,
            'dateSubjek'=>$request->dateSubjek,
            'attendance'=>$request->attendance,
            'image'=>$fileName,
            'Fakultas_id'=>$request->Fakultas_name
        ]);
        return redirect(route('show'));

    }
    public function edit($id){
        $mhs=Mhs::findOrFail($id);
        return view('editMhs', compact('mhs'));
    }
    public function update(Request $request, $id){
        $mhs=Mhs::findOrFail($id);
        $fileName=$request->nim .'-'. $request->name .'-'. $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $fileName);
        $mhs->update([
            'nim'=>$request->nim,
            'name'=>$request->name,
            'class'=>$request->class,
            'subjek'=>$request->subjek,
            'dateSubjek'=>$request->dateSubjek,
            'attendance'=>$request->attendance,
            'image'=>$fileName
        ]);
        return redirect(route('show'));
    }

    public function delete($id){
        Mhs::destroy($id);
        return redirect(route('show'));
    }
}
