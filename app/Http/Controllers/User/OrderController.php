<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // $order = Destination::findOrFail($id);
        // return view('user.order.create');
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
            'depart_date' => ['required', 'date'],
            'destination_id' => ['integer']
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        if($request->jumlah_tiket) {
            $validatedData['total'] = $request->jumlah_tiket * $request->harga;
        }
        $validatedData['status_pemesanan'] = 'dalamproses';

        Order::create($validatedData);
        return to_route('dashboard')->with('success', 'pesanan berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $order = Order::findOrFail($id);
        return view('user.order.edit', [
            'order' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $validatedData = $request->validate([
            'depart_date' => ['required', 'date'],
            'destination_id' => ['integer']
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        if($request->jumlah_tiket) {
            $validatedData['total'] = $request->jumlah_tiket * $request->harga;
        }
        $validatedData['status_pemesanan'] = 'dalamproses';

        $order->update($validatedData);
        return to_route('dashboard')->with('success', 'pesanan berhasil di update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return to_route('order.index')->with('success', 'destination deleted successfully');
    }
}
