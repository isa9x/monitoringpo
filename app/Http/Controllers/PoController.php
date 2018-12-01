<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Po;
use App\Barang;

class PoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::latest()->groupBy('po_id')->paginate(10);

        return view('po.index',compact('barang'))
        ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('po.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                    
        $po = PO::create([
            'nomor' => $request->nomor,
            'nama_vendor' => $request->nama_vendor,
            'tanggal_po' => Carbon::parse($request->tanggal_po),     
            'tanggal_kirim' => Carbon::parse($request->tanggal_kirim)
        ]);
        
        $idpo=$po->id;

        $jumlah=@count($request['nama']);
        for($i=0;$i < $jumlah; ++$i){
                $barang=new Barang;
                $barang->po_id=$idpo;
                $barang->nama=$request['nama'][$i];
                $barang->jumlah=$request['jumlah'][$i];
                $barang->satuan=$request['satuan'][$i];
                $barang->harga=$request['harga'][$i];
            
                $barang->save();
        }

        $po->save();

        return redirect('po')
            ->with('success','Input PO Berhasil');      
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
        $po = Po::find($id);
        return view('po.edit',compact('po','id'));
    }

     public function update(Request $request, $id)
    {
        $po= Po::find($id);
        $po->nomor = $request->nomor;
        $po->nama_vendor = $request->nama_vendor;
        $po->tanggal_po = Carbon::parse($request->tanggal_po);
        $po->tanggal_kirim = Carbon::parse($request->tanggal_kirim);
        $po->status = $request->status;
        $po->update();
        return redirect('po')->with('success','Update Data PO Berhasil');
    }

    public function editBarang($id)
    {
        $barang = Barang::all();
        $items = $barang->where('po_id', $id);
        //dd($items);
        return view('po.editbarang',compact('items','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updateBarang(Request $request, $id)
    {
        $jumlah=@count($request['nama']);
        $items = Barang::all();
        $barang = $items->where('po_id', $id);
        dd($barang);
        for($i=0;$i < $jumlah; ++$i){
                $barang->nama=$request['nama'][$i];
                $barang->jumlah=$request['jumlah'][$i];
                $barang->satuan=$request['satuan'][$i];
                $barang->harga=$request['harga'][$i];
            
                $barang->update();
        }

        return redirect('po')->with('success','Update Barang PO Berhasil');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Po::find($id)->delete();
        return redirect()->route('po.index')
                        ->with('success','PO berhasil dihapus');
    }
}
