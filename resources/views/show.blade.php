@extends('layouts.layout')



@section('content')


<div class="card d-flex  mt-5 justify-content-around"  style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $booking->guest_full_name }}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{ $booking->room }}</h6>
      <h6 class="card-subtitle mb-2 text-muted">{{ $booking->guest_credit_card }}</h6>
      <h6 class="card-subtitle mb-2 text-muted">{{ $booking->from_date }}</h6>
      <p class="card-text">{{ $booking->more_details }}</p>
      <a href="{{route('bookings.index')}}">Torna a contatti</a>
      <a href="{{route('bookings.create')}}">Torna a create</a>
    </div>
  </div>

@endsection