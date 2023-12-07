<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showroom;

class ShowroomController extends Controller
{
    public function index(){ 
        $showroom = Showroom::all();
        return view('showroom.index', compact('showroom'));
    }
    //
    public function create(){
        return view('showroom.create');
    }
    
    public function store(Request $request){
    
        $data = $request->all();

        Showroom :: create([
            'nama'=>$data['nama_mobil'],
            'brand'=>$data['brand_mobil'],
            'warna'=>$data['warna_mobil'],
            'tipe'=>$data['tipe_mobil'],
            'harga'=>$data['harga_mobil']
        ]);

        return redirect(route('showroom'));
    }
}