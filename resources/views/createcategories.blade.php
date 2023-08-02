@extends('layouts.navbar')

@section('detail-information')
<div class="container text-center mb-5">
  <h1>Add New {{ $label }}</h1>
</div>
<div class="d-flex justify-content-center">
  <div style="width: 800px">
    <form class="form-floating" action="{{ env('APP_URL') }}{{ $url }}" method="post">
      @csrf
      <div class="mb-3 form-floating">
        <input type="text" id="floatingInput" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
        <label for="floatingInput">Name {{ $label }}</label>
        @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="d-flex justify-content-between ">
        <a href="{{ env('APP_URL') }}/dashboard/cooperations" class="btn btn-danger">Return to home</a>
        <button type="submit" class="btn btn-success">Add {{ $label }}</button>
      </div>
    </form>
  </div>
</div>
@endsection