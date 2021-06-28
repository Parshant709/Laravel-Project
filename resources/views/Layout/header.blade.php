<header>	
  <div class="container-fluid hd">
    <div class="container">
      <div class="row rowHeight">
        <div class="col-8 col-md-10 en">
          <h3><a href="{{ url('/') }}" style="text-decoration: none; color:#fff;">ENEST</a></h3>	
          <span>THE BIGGEST CHOICE ON WEB</span>
        </div>
        <div class="col-4 col-md-2 login align-self-center ">
          <a href="{{ url('/login') }}"><button class="btn btn-dark login">Log In</button></a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
      <div class="col-6 col-md-8 li navbar navbar-expand-lg" >
        <button class="navbar-toggler navbar-dark navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        
        <ul class="navbar-nav me-auto mb-2 mb-lg-2">
          <li class="nav-item"><a  class="nav-link" href="{{ url('/') }}">HOME</a></li>
          <li class="nav-item"><a  class="nav-link" href="{{ url('/newproducts') }}">NEW PRODUCTS</a></li>
          <li class="nav-item"><a  class="nav-link" href="{{ url('/special') }}">SPECIALS</a></li>
          <li class="nav-item"><a  class="nav-link" href="{{ url('/products') }}">ALL PRODUCTS</a></li>
          <li class="nav-item"><a  class="nav-link" href="#">REVIEWS</a></li>
          <li class="nav-item"><a  class="nav-link" href="{{ url('/contact') }}">CONTACTS</a></li>
          <li class="nav-item"><a  class="nav-link" href="#">FAQS</a></li>
        </ul>
        </div>
      </div>
      <div class="col-6 col-md-4" >
          <div class="row mb-3">
          <form class="d-flex">
                <input class="form-control col-6 col-md-6 mr-3" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
              </form>
          </div>
      </div>
      </div>
      </div>
  </div>
</header>