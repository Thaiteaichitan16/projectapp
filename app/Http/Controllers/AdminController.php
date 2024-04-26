<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\pelanggan;
use App\Models\produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
        
    public function logouta(){
        session()->flush();
        return back();
    }
    public function login(){
        return view("login");
    }
    public function ceklogin(Request $request){
        $s = new Admin();
        $s= $s->where ('Username',$request->input('Username'))->where('Password',$request->input('Password'));

        if($s->exists()){
            session([
                'Username'=>$request->input('Username'),
                'Password'=>$request->input('Password')
            ]);
            return redirect('dashboard');
        }
        return back()->with('pesan','Username Dan Password Salah');
    }   
    public function dash(){
        return view("dashboard");
    }
    public function datapenjualan(){
        return view("datapenjualan");
    }
    public function dataadmin(){
        $ambil = new Admin();
        return view ('dataadmin',['admins'=>$ambil->paginate(6)]);
    }
    public function tbadmins(Request $request){
         $c = new Admin();
        // $cek = $request->validate([        
        //     'Judul' => 'required'        
        // ]);        
        $c->create($request->all());
        return back()->with('Pesan','Data Berhasil Ditambahkan');
    }
    public function editadmin($id){
         $p = new Admin();
          return view('editadmin',['editadmin'=>$p->find($id)]);
    }
    public function editadmins(Request $request,$id){
        // $validasi = $request->validate([
        //     'Nama' => 'required'
        // ]);
        $p = new Admin();
        $p = $p->find($id)->update($request->all());;
        return redirect('admin')->with('pesan','Update Data Berhasil');;
     }
    public function hapusadmin($AdminID){
        $p = new Admin();
        $p = $p->find($AdminID);
        $p->delete();
        return back();
    }
    //produk
    public function dataproduk(){
        $ambil = new produk();
        return view ('dataproduk',['produks'=>$ambil->paginate(6)]);
    }
    public function tbproduks(Request $request){
         $c = new produk();
        // $cek = $request->validate([        
        //     'Judul' => 'required'        
        // ]);        
        $c->create($request->all());
        return back()->with('Pesan','Data Berhasil Ditambahkan');
    }
    public function editproduk($id){
         $p = new produk();
          return view('editproduk',['editproduk'=>$p->find($id)]);
    }
    public function editproduks(Request $request,$id){
        $validasi = $request->validate([
            'NamaProduk' => 'required'
        ]);
        $p = new produk();
        $p = $p->find($id)->update($request->all());;
        return redirect('produk')->with('pesan','Update Data Berhasil');;
     }
    public function hapusproduk($ProdukID){
        $p = new produk();
        $p = $p->find($ProdukID);
        $p->delete();
        return back();
    }

    //pelanggan
    public function datapelanggan(){
        $ambil = new pelanggan();
        return view ('datapelanggan',['pelanggans'=>$ambil->paginate(6)]);
    }
    public function tbpelanggan(){
        return view ('tambahpelanggan');
    }
    public function tbpelanggans(Request $request){
         $c = new pelanggan();
        // $cek = $request->validate([        
        //     'Judul' => 'required'        
        // ]);        
        $c->create($request->all());
        return redirect('pelanggan')->with('Pesan','Data Berhasil Ditambahkan');
    }
    public function editpelanggan($id){
         $p = new pelanggan();
          return view('editpelanggan',['editpelanggan'=>$p->find($id)]);
    }
    public function editpelanggans(Request $request,$id){
        // $validasi = $request->validate([
        //     'Nama' => 'required'
        // ]);
        $p = new pelanggan();
        $p = $p->find($id)->update($request->all());;
        return redirect('pelanggan')->with('pesan','Update Data Berhasil');;
     }
    public function hapuspelanggan($PelangganID){
        $p = new pelanggan();
        $p = $p->find($PelangganID);
        $p->delete();
        return back();
    }
    //pasok
    

}
