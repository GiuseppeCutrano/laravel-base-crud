@extends('layouts.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-center justify-content-center ">
            <form method="POST" action="{{ route("bookings.update", $booking->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="guest-name"></label>
                    <input type="text" class="form-control mb-2" name="guest_full_name" id="guest-name" aria-describedby="emailHelp"
                        placeholder="Inserisci il nome" value= {{ $booking->guest_full_name }}> 
                        @error("guest_full_name")
                        <div class="">
                            {{$message}}
                        </div>
                        @enderror
                    <label for="guest-room"></label>
                    <input type="text" class="form-control mb-2" name="room" id="guest-room" aria-describedby="emailHelp"
                        placeholder="Inserisci numero stanza" value={{ $booking->room }}>
                        @error("room")
                        <div class="">
                            {{$message}}
                        </div>
                        @enderror
                    <label for="guest-room"></label>
                    <input type="text" class="form-control mb-2" name="guest_credit_card" id="guest-card" aria-describedby="emailHelp"
                        placeholder="Inserisci numero carta di credito" value={{ $booking->guest_credit_card }}>
                        @error("room")
                        <div class="">
                            {{$message}}
                        </div>
                        @enderror
                    <label for="from_date">Data arrivo</label>
                    <input type="date" class="form-control mb-2" name="from_date" id="from_date" aria-describedby="emailHelp"
                        placeholder="Inserisci data arrivo" value={{ $booking->from_date}}>
                    <label for="to_date">Data partenza</label>
                    <input type="date" class="form-control mb-2" name="to_date" id="to_date" aria-describedby="emailHelp"
                        placeholder="Inserisci data partenza" value={{ $booking->to_date}}>
                    <label for="more_details">Altri dati</label>
                    <textarea type="text" class="form-control mb-2" name="more_details" id="more_details" aria-describedby="emailHelp"
                        placeholder="Inserisci note" value={{ $booking->more_details}}> </textarea>
                    
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    
                </div>
                
                
               
                
            </form>
        </div>
    </div>
@endsection