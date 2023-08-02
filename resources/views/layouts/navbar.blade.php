@include('layouts.header')

  <body>
    <header>
      <nav class="navbar bg-body-tertiary px-5">
        <div class="container-fluid d-flex">
          <div class="logo ms-2">
            <img src="{{ env('APP_URL') }}/img/logo.png" alt="Logo" width="300" height="70" class="d-inline-block align-text-top" />
          </div>
          <div class="navlist d-flex justify-content-evenly">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link fs-4 {{ Request::is('dashboard/cooperations') ? 'active' : '' }} {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ env('APP_URL') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-4" href="#">Pages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-4" href="#">Media</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-4" href="#">features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-4" href="#">Help</a>
              </li>
            </ul>
          </div>

          @auth
          
            <div class="navbutton">
              <a href="{{ env('APP_URL') }}/logout" type="button" class="btn btn-success rounded-3 fw-bold fs-4 pe-4 ps-4 text-dark me-5 fs-5 btn-danger">Logout</a>
            </div>
            
          @else
          
            <div class="navbutton">
              <a href="{{ env('APP_URL') }}/login" type="button" class="btn btn-success rounded-3 fw-bold fs-4 pe-4 ps-4 text-dark me-5 fs-5 btn-success">Login</a>
            </div>
          
          @endauth

        </div>
      </nav>
      <div class="navbar px-5">
        <div class="container-fluid ms-2 me-2">

          @auth
          
            @if (!Request::is('dashboard/cooperations/create'))
            
              <form action="{{ env('APP_URL') }}/dashboard/cooperations" class="search">
                <div class="input-group">
                  <button class="input-group-text bg-primary text-light fw-bold rounded-start-4 ms-4" id="basic-addon1" type="submit">Search</button>
                  <input type="text" name="search" class="form-control rounded-end-4" placeholder="Search our website" aria-p="search" aria-describedby="basic-addon1" value="{{ request('search') }}"/>
                </div>
              </form>
              
            @endif
              
          @else
              
            <form action="{{ env('APP_URL') }}" class="search">
              <div class="input-group">
                <button class="input-group-text bg-primary text-light fw-bold rounded-start-4 ms-4" id="basic-addon1" type="submit">Search</button>
                <input type="text" name="search" class="form-control rounded-end-4" placeholder="Search our website" aria-p="search" aria-describedby="basic-addon1" value="{{ request('search') }}"/>
              </div>
            </form>
          
          @endauth

          <div class="dropdown">
            <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Country
            </a>
            <ul class="dropdown-menu">
              @foreach($countries as $country)
              <li>
                <a class="dropdown-item" href="{{ env('APP_URL') }}/category/country/{{ $country->name }}">{{ $country->name }}</a>
              </li>
              @endforeach
            </ul>
          </div>
          
          <div class="dropdown">
            <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Organization Type
            </a>
            <ul class="dropdown-menu">
              @foreach($organizations as $organization)
              <li>
                <a class="dropdown-item" href="{{ env('APP_URL') }}/category/organizationtype/{{ $organization->name }}">{{ $organization->name }}</a>
              </li>
              @endforeach
            </ul>
          </div>
          
          <div class="dropdown">
            <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Industry Type
            </a>
            <ul class="dropdown-menu">
              @foreach($industries as $industry)
              <li>
                <a class="dropdown-item" href="{{ env('APP_URL') }}/category/industrytype/{{ $industry->name }}">{{ $industry->name }}</a>
              </li>
              @endforeach
            </ul>
          </div>
          <a href="#contactus" type="button" class="btn btn-primary rounded-3 fw-bold me-5">Contact Us</a>
        </div>
      </div>
    </header>
    <div class="container mt-5 pt-3">
      @yield('detail-information')
      <ol class="list-group list-group-numbered">
        @yield('list-cooperation')
      </ol>
    </div>
  @include('layouts.footer')
