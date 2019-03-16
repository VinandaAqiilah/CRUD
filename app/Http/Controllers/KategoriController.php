<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_table;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //search data
        if ($request->has('cari')){
            $kategori = \App\kategori_table::where('nama_kategori','LIKE','%'.$request->cari.'%')->get();
        } else {
            $kategori = kategori_table::all();
        } 
        return view('category.index', compact('kategori'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table
        DB::table('kategori')->insert([
            'nama_kategori' => $request->nama_kategori,
            'slug' => $request->slug,
            "updated_at" => \Carbon\Carbon::now()
        ]);

        // alihkan halaman ke halaman
        return redirect('/kategori');
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
        $output = 'Daftar Kategori';
        $kategori = kategori::get();
        return view('show', array(
          'kategori' => $output,
          'kategori' => $kategori
        ));
    }
    public function search(Request $request)
    {
        $query = $request->input('cari');
        $hasil = Kategori::where('kategori', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('dasboard.result', compact('hasil', 'query'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = DB::table('kategori')->where('id',$id)->get();
        return view('dasboard.edit',['kategori' => $kategori]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('kategori')->where('id',$request->id)->update([
            'nama_kategori' => $request->nama_kategori,
            'slug' => $request->slug
             
           
        ]);
            return redirect('/kategori');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kategori')->where('id',$id)->delete();
        return redirect('/kategori');
    }
}
