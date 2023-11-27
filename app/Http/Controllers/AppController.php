<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\film;

class AppController extends Controller
{
    //
    public function home(){
        return view("home");
    }

    public function film(){
        $film = Film::get();

        $data = ([
            "film" => $film,
        ]);

        return view("film", $data);
    }
    
    public function tambah(){
        return view("tambah");
    }
    public function proses_tambah(Request $request){
        $id = $request->id;
        $judul = $request->judul;
        $tgl_tayang = $request->tgl_tayang;
        $sutradara = $request->sutradara;
        $studio = $request->studio;
        $sinopsis = $request->sinopsis;
        $bahasa = $request->bahasa;

        Film::create([
            "id" => $id,
            "judul" => $judul,
            "tgl_tayang" => $tgl_tayang,
            "sutradara" => $sutradara,
            "studio" => $studio,
            "sinopsis" => $sinopsis,
            "bahasa" => $bahasa
        ]);

        session()->flash("pesan","Data berhasil ditamabh");

        return redirect("film");
    }

    public function edit($id){
        $film = Film::where("id", $id)->first();

        if(!$film){
            abort(404);
        }

        $data = ([
            "film" => $film,
        ]);

        return view("edit", $data);
    }
    
    public function proses_edit(Request $request){
        $id = $request->id;
        $judul = $request->judul;
        $tgl_tayang = $request->tgl_tayang;
        $sutradara = $request->sutradara;
        $studio = $request->studio;
        $sinopsis = $request->sinopsis;
        $bahasa = $request->bahasa;

        Film::where("id", $id)->update([
            "id" => $id,
            "judul" => $judul,
            "tgl_tayang" => $tgl_tayang,
            "sutradara" => $sutradara,
            "studio" => $studio,
            "sinopsis" => $sinopsis,
            "bahasa" => $bahasa
        ]);

        session()->flash("pesan","Data berhasil diedit");

        return redirect("film/".$id."/edit");
    }    

    public function hapus($id){
        Film::where("id",$id)->delete();
        return redirect("film");
    }
}
