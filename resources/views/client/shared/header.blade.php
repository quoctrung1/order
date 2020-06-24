<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-purple">
  <a class="navbar-brand" href="">Temple Client</a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <div class="input-group mr-2">
        <input type="text" class="form-control" placeholder="Enter key work" aria-label="Enter key work" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-light" type="button">Search</button>
        </div>
      </div>
      <a href="{{route('loginClient.index')}}" class="btn btn-outline-light my-2 my-sm-0 mr-2">Login</a>
      <a href="{{route('cart.index')}}" class="btn btn-outline-light my-2 my-sm-0">Cart</a>
    </form>
  </div>
</nav>