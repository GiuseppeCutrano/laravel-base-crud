<header>
  <nav>
      <div class="container">
          <div class="row">
            
              <ul class="nav justify-content-center">

                <li class="nav-item">
                  <a class="nav-link" href='/'>Home</a>
                </li>

        
                <li class="nav-item ">
                  <a class="nav-link active" aria-current="page" href="{{ route("bookings.index") }}">Contatti</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route("bookings.create") }}">Crea Contatto</a>
                </li>
                
                
               
                
              </ul>
          <hr>
      </div>
  </nav>
</header>

{{-- @section("navabar")
      
        <ul class="nav justify-content-center">

        
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="{{ route("bookings.index") }}">Contatti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route("bookings.create") }}">Crea Contatto</a>
          </li>
          
         
          
        </ul>
       
        
@show --}}