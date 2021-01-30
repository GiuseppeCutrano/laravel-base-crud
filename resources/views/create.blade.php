@extends('layouts.layout')
<div >
    <a href="/">Homepage</a>
</div>
@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-center justify-content-center ">
            <form method="POST" action="{{ route("bookings.store")}}">
                @csrf
                <div class="form-group">
                    <label for="guest-name">Nome e Cognome</label>
                    <input type="text" class="form-control mb-2" name="guest_full_name" id="guest-name" aria-describedby="emailHelp"
                        placeholder="Inserisci il nome">
                    <label for="guest-room">Stanza</label>
                    <input type="text" class="form-control mb-2" name="room" id="guest-room" aria-describedby="emailHelp"
                        placeholder="Inserisci numero stanza">
                    <label for="guest-room">Carta di credito</label>
                    <input type="text" class="form-control mb-2" name="guest_credit_card" id="guest-card" aria-describedby="emailHelp"
                        placeholder="Inserisci numero carta di credito">
                    <label for="from_date">Data arrivo</label>
                    <input type="date" class="form-control mb-2" name="from_date" id="from_date" aria-describedby="emailHelp"
                        placeholder="Inserisci data arrivo">
                    <label for="to_date">Data partenza</label>
                    <input type="date" class="form-control mb-2" name="to_date" id="to_date" aria-describedby="emailHelp"
                        placeholder="Inserisci data partenza">
                    <label for="more_details">Altri dati</label>
                    <textarea type="text" class="form-control mb-2" name="more_details" id="more_details" aria-describedby="emailHelp"
                        placeholder="Inserisci note"> </textarea>
                    
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    
                </div>
                
                
               
                
            </form>
        </div>
    </div>
@show