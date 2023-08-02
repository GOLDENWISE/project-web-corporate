@extends('layouts.navbar')

@section('detail-information')
<article>
  <h1>{{ $cooperation->name }}</h1>
  <h5>Cooperated since {{ date('d F Y', strtotime($cooperation->cooperation_started_from)) }}</h5>
  <ul class="list-group">
    <li class="list-group-item">Organization Type: {{ $cooperation->organization_type->name }}</li>
    <li class="list-group-item">Industry Type: {{ $cooperation->industry->name }}</li>
    <li class="list-group-item">Country: {{ $cooperation->country->name }}</li>
    <li class="list-group-item">{{ $cooperation->description }}</li>
  </ul>
</article>
<a href="{{ env('APP_URL') }}" class="btn btn-primary mt-4">Return to Home</a>
@endsection