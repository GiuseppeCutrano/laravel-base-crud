@section("navabar")
        <ul class="nav justify-content-center">

        
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="{{ route("bookings.index") }}">Contatti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route("bookings.create") }}">Crea Contatto</a>
          </li>
         
          
        </ul>
        @show