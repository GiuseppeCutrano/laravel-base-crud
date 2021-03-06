<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookingsFormRequest;


use App\Booking;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();
        return view('index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingsFormRequest $request)

    {
        $validated = $request->validated();

        $newBooking = new Booking();
        $newBooking->guest_full_name = $validated["guest_full_name"];
        $newBooking->guest_credit_card = $validated["guest_credit_card"];
        $newBooking->room = $validated["room"];
        $newBooking->from_date = $request->input('from_date');
        $newBooking->to_date = $request->input('to_date');
        $newBooking->more_details = $request->input('more_details');

        $newBooking->save();
        return view('store');

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::find($id);
        return view('show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::find($id);
        return view('edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookingsFormRequest $request, $id)
    {
        $validated = $request->validated();

        $oldBooking = Booking::find($id);
        $oldBooking->guest_full_name = $validated["guest_full_name"];
        $oldBooking->guest_credit_card = $validated["guest_credit_card"];
        $oldBooking->room = $validated["room"];
        $oldBooking->from_date = $request->input('from_date');
        $oldBooking->to_date = $request->input('to_date');
        $oldBooking->more_details = $request->input('more_details');

        $oldBooking->save();

        return redirect()->route("bookings.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
