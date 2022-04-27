<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index',compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip'=>'required|max:12',
            'name'=>'required|max:255',
            'no_hp'=>'required|max:12',
            'alamat'=>'required',
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $ceknip = Dosen::where('nip',$request->nip)->count();
        $ceknohp = Dosen::where('no_hp',$request->no_hp)->count();
        $cekemail = Dosen::where('email',$request->email)->count();
        if($ceknip == 0){
            if($ceknohp == 0){
                if($cekemail == 0 ){

                    Dosen::create($request->all());
                    return redirect('dosen');
                }else{
                    return "email sudah terdaftar";
                }
            }else{
                return "Noph sudah terdaftar";
            }
        }else{
            return "Data Sudah Ada";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
        return view('dosen.edit',compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nip'=>'required|max:12',
            'name'=>'required|max:255',
            'no_hp'=>'required|max:12',
            'alamat'=>'required',
            'email'=>'required|email',
            'password'=>'required',
        ]);
        // $ceknip = Dosen::where('nip',$request->nip)->count();
        // $ceknohp = Dosen::where('no_hp',$request->no_hp)->count();
        // $cekemail = Dosen::where('email',$request->email)->count();
        // if($ceknip == 0){
        //     if($ceknohp == 0){
        //         if($cekemail == 0 ){

                   
        //         }else{
        //             return "email sudah terdaftar";
        //         }
        //     }else{
        //         return "Noph sudah terdaftar";
        //     }
        // }else{
        //     return "Data Sudah Ada";
        // }
        $dosen->update($request->all());
        return redirect('dosen');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy($nip)
    {
        Dosen::where('nip',$nip)->delete();
        return \redirect()->back();
    }
}
