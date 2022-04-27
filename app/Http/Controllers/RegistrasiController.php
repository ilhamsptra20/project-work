<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrasi = Registrasi::all();
        return view('registrasi.index',compact('registrasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrasi.create');
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
            'nama'=>'required|max:45',
            'tempat_lahir'=>'required|max:30',
            'agama'=>'required|max:9',
            'no_hp'=>'required|max:12',
            'no_telp'=>'required|max:10',
            'nama_sekolah'=>'required|max:35',
            'tahun_lulus'=>'required|max:4',
            'nama_orangtua'=>'required|max:35',
            'no_hp_orangtua'=>'required|max:12',
            'email_orangtua'=>'required|email|max:35',
            'pekerjaan_orangtua'=>'required|max:15',
            'nama_instansi_orangtua'=>'required|max:25',
            'pendidikan_orangtua'=>'required|max:4',
            'jurusan'=>'required|max:5',
            'no_ijazah'=>'required|max:13',
        ]);
        $ceknohportu = Registrasi::where('no_hp_orangtua',$request->no_hp_orangtua)->count();
        $ceknohp = Registrasi::where('no_hp',$request->no_hp)->count();
        $cekemail = Registrasi::where('email',$request->email)->count();
        $cekemailorangtua = Registrasi::where('email_orangtua',$request->email_orangtua)->count();
        
        if($ceknohp == 0){
            if($cekemail == 0 ){
                if($ceknohportu == 0){
                    if($cekemailorangtua == 0){
                        Registrasi::create($request->all());
                        return redirect('registrasi');
                    }else{
                        return "email orang tua sudah terdaftar";
                    }
                }else{
                    return "No Hp Orang Tua Sudah Terdaftar";
                }
            }else{
                return "email sudah terdaftar";
            }
        }else{
            return "No Hp sudah terdaftar";
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function show(Registrasi $registrasi)
    {
        return view('registrasi.show',compact('registrasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Registrasi $registrasi)
    {
        return view('registrasi.edit',compact('registrasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registrasi $registrasi)
    {
        $request->validate([
            'nama'=>'required|max:45',
            'tempat_lahir'=>'required|max:30',
            'agama'=>'required|max:9',
            'no_hp'=>'required|max:12',
            'no_telp'=>'required|max:10',
            'nama_sekolah'=>'required|max:35',
            'tahun_lulus'=>'required|max:4',
            'nama_orangtua'=>'required|max:35',
            'no_hp_orangtua'=>'required|max:12',
            'email_orangtua'=>'required|email|max:35',
            'pekerjaan_orangtua'=>'required|max:15',
            'pendidikan_orangtua'=>'required|max:4',
            'jurusan'=>'required|max:5',
            'no_ijazah'=>'required|max:13',
        ]);
        // $ceknohportu = Registrasi::where('no_hp_orangtua',$request->no_hp_orangtua)->count();
        // $ceknohp = Registrasi::where('no_hp',$request->no_hp)->count();
        // $cekemail = Registrasi::where('email',$request->email)->count();
        // $cekemailorangtua = Registrasi::where('email_orangtua',$request->email_orangtua)->count();
        
        // if($ceknohp == 0){
        //     if($cekemail == 0 ){
        //         if($ceknohportu == 0){
        //             if($cekemailorangtua == 0){
                      
        //             }else{
        //                 return "email orang tua sudah terdaftar";
        //             }
        //         }else{
        //             return "No Hp Orang Tua Sudah Terdaftar";
        //         }
        //     }else{
        //         return "email sudah terdaftar";
        //     }
        // }else{
        //     return "No Hp sudah terdaftar";
        // }
        $registrasi->update($request->all());
        return redirect('registrasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Registrasi::where('id',$id)->delete();
        return redirect()->back();
    }
}
