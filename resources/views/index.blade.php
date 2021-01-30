@extends('layouts.layout')


<div >
    <a href="/">Homepage</a>
</div>


@section('main')
    <div class ="container">
        <div class="row">
            <div class="d-flex flex-wrap mt-5 justify-content-around ">
                @foreach ($bookings as $booking )
                <div class="card mb-5" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">{{ $booking["guest_full_name"] }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Num. Room {{ $booking["room"] }}</h6>
                <p class="card-text">{{ $booking["more_details"] }}</p>
                <a href="{{ route("bookings.show",$booking["id"]) }}" class="card-link">Reservation Details</a>
                
                </div>
                </div>
                @endforeach
                
  

            
        </div>
    </div>

@endsection
  


   


