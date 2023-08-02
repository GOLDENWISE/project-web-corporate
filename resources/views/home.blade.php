@extends('layouts.navbar')
@section('detail-information')

  @auth

    @if(session()->has('success'))
    
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>

    @endif

    <div class="dropdown mb-3">
      <button type="button" class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Add Data
      </button>
      <ul class="dropdown-menu">
        <li>
          <a href="{{ env('APP_URL') }}/dashboard/cooperations/create" class="btn btn-primary mb-4 dropdown-item">Add new cooperation</a>
        </li>
        <li>
          <a href="{{ env('APP_URL') }}/country/create" class="btn btn-primary mb-4 dropdown-item">Add new country</a>
        </li>
        <li>
          <a href="{{ env('APP_URL') }}/organizationtype/create" class="btn btn-primary mb-4 dropdown-item">Add new organization type</a>
        </li>
        <li>
          <a href="{{ env('APP_URL') }}/industrytype/create" class="btn btn-primary mb-4 dropdown-item">Add new industry type</a>
        </li>
      </ul>
    </div>

  @endauth

@endsection

@section('list-cooperation')

  @if($cooperations->count())

    @foreach ($cooperations as $cooperation)

      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold"> {{ $cooperation->name }} </div>
          Cooperated since {{ date('d F Y', strtotime($cooperation->cooperation_started_from)) }}
        </div>
        @auth
        
          <a href="{{ env('APP_URL') }}/dashboard/cooperations/{{ $cooperation->id }}/edit" class="btn btn-sm text-light fw-bold bg-success rounded-pill me-3">Update</a href="#">
          <a href="{{ env('APP_URL') }}/dashboard/cooperations/company/{{ $cooperation->id }}" class="btn btn-sm text-light fw-bold bg-danger rounded-pill me-3 delete-button">Delete</a href="#">
    
        @endauth
        <a href="{{ env('APP_URL') }}/detail/{{ $cooperation->name }}" class="btn btn-sm text-light fw-bold bg-primary rounded-pill">More</a href="#">
      </li>
      
    @endforeach

  @else
      
      <p class="text-center fs-4">No cooperation found</p>

  @endif

  <div class="d-flex justify-content-center mt-5 ">
    @if($cooperations->links() !== null)
      {{ $cooperations->links() }}
    @endif
  </div>

@endsection
