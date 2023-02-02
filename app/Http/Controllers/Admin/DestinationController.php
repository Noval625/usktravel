<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use PDF;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destination::all();
        return view('admin.destinate.index', [
            'destinations' => $destinations
        ]);
    }

    // public function cetakpdf()
    // {
    // 	$destinations = Destination::all();

    // 	$pdf = PDF::loadview('admin.destination.cetak',['destinations'=>$destinations]);
    // 	return $pdf->download('laporan-destination.pdf');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destinate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_tempat' => ['required', 'string', 'max:100'],
            'deskripsi' => ['required', 'string'],
            'harga' => ['required'],
            'negara' => ['required', 'string'],
            'jumlah_orang' => ['integer', 'required'],
            'jumlah_hari' => ['integer', 'required']
        ]);

        if($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = date('YMD') . $file->getClientOriginalName();
            $file->move(public_path('upload/destinate'), $fileName);

            $validatedData['gambar'] = $fileName;
        }

        Destination::create($validatedData);
        return to_route('destinate.index')->with('success', 'destination created successfully');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination, Request $request)
    {



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $destination = Destination::findOrFail($id);
        return view('admin.destinate.edit', [
            'destination' => $destination
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destinate)
    {
        $validatedData = $request->validate([
            'nama_tempat' => ['required', 'string', 'max:100'],
            'deskripsi' => ['required', 'string'],
            'harga' => ['required'],
        ]);

        if($request->hasFile('gambar')) {

            $file = $request->file('gambar');
            $fileName = date('YMD') . $file->getClientOriginalName();
            $file->move(public_path('upload/destinate'), $fileName);

            $validatedData['gambar'] = $fileName;
        }

        $destinate->update($validatedData);
        return to_route('destinate.index')->with('success', 'destination updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);
        Storage::delete($destination->gambar);
        $destination->delete();
        return to_route('destinate.index')->with('success', 'destination deleted successfully');

    }
}
