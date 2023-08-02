@extends('layouts.navbar')

@section('detail-information')
<div class="container text-center mb-5">
  <h1>{{ $title }}</h1>
</div>
<div class="d-flex justify-content-center">
  <div style="width: 800px">
    <form class="row g-3 form-floating" method="post" action="{{ env('APP_URL') }}/dashboard/cooperations/@if(!Request::is('dashboard/cooperations/create')){{ !Request::is('dashboard/cooperations/create') ? $cooperation->id : '' }}@endif">
      @csrf
      @if(!Request::is('dashboard/cooperations/create'))
        @method('put')
      @endif
      <div class="col-md-7 form-floating">
        <input id="name" type="text" class="form-control @error('name') is-invalid  @enderror" name="name" value="{{Request::is('dashboard/cooperations/create') ? old('name') : $cooperation->name }}">
        <label for="name">Name</label>
        @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="col-md-5 form-floating">
        <select id="inputState" class="form-select @error('country_id') is-invalid  @enderror" name="country_id">
          <option value="{{ old('country_id') }}" selected disabled>Choose your Option</option>
          @foreach ($countries as $country)

            <option value="{{ $country->id }}" @if(!Request::is('dashboard/cooperations/create')) @if($country->id === $cooperation->country_id) selected @endif @endif>{{ $country->name }}</option>
          
          @endforeach
        </select>
        <label for="inputState">Country</label>
        @error('country_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="col-md-6 form-floating">
        <select id="inputState1" class="form-select @error('organization_type_id') is-invalid  @enderror" name="organization_type_id">
          <option value="{{ old('organization_type_id') }}" selected disabled>Choose your Option</option>
          @foreach ($organizations as $org)
          
            <option value="{{ $org->id }}" @if(!Request::is('dashboard/cooperations/create'))  @if($org->id === $cooperation->organization_type_id) selected @endif @endif>{{ $org->name }}</option>
          
          @endforeach
        </select>
        <label for="inputState1">Organization</label>
        @error('organizationtype_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="col-md-6 form-floating">
        <select id="inputState2" class="form-select @error('industry_id') is-invalid  @enderror" name="industry_id">
          <option value="{{ old('industry_id') }}" selected disabled>Choose your Option</option>
          @foreach ($industries as $industry)
        
            <option value="{{ $industry->id }}"@if(!Request::is('dashboard/cooperations/create')) @if($industry->id === $cooperation->industry_id) selected @endif @endif>{{ $industry->name }}</option>
          
          @endforeach
        </select>
        <label for="inputState2">Industry Type</label>
        @error('industry_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="col-md-12">
        <label for="description" class="mb-2">Add Company Description</label>
        <textarea class="form-control @error('name') is-invalid  @enderror" id="description" rows="5" placeholder="Add Description" name="description" value="fad">
          {{Request::is('dashboard/cooperations/create') ? old('description') : $cooperation->description }}
        </textarea>
        @error('description')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="col-12 d-flex justify-content-between ">
        <a href="{{ env('APP_URL') }}/dashboard/cooperations" class="btn btn-danger">Return to home</a>
        <button type="submit" class="btn btn-success">Add Company</button>
      </div>
    </form>
  </div>
</div>
@endsection