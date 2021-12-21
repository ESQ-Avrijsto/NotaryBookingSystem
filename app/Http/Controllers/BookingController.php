<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.booking.index', [
            'booking' => Booking::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.booking.create');
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
            'id_jadwal' => 'required',
            'id_notaris' => 'required|max:8',
            'id_klien' => 'required|max:8',
            'start_date' => 'required',
            'end_date' => 'required',
           
        ]);
        Booking::create($request->all());

        return redirect('/dashboard/booking')->with('Berhasil', 'Data Berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('dashboard.booking.show', [
            'booking' => $booking
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('dashboard.booking.edit', [
            'booking' => $booking
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'id_jadwal' => 'required',
            'id_notaris' => 'required|max:8',
            'id_klien' => 'required|max:8',
            'start_date' => 'required',
            'end_date' => 'required',
           
        ]);
        $booking->update($request->all());

        return redirect('/dashboard/booking')->with('Berhasil', 'Data Berhasil di perbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        Booking::destroy($booking->id);

        return redirect('/dashboard/booking')->with('Berhasil', 'Data Berhasil Dihapus');
    }
}
