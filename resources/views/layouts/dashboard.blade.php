@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="col-12 mb-4">
  <div class="hero text-white" style="background-color: #6777ef">
    <div class="hero-inner">
      <h2>Welcome, 
        @if (!empty(auth()->user()->name))
          {{ auth()->user()->name }}
        @else
          user
        @endif
        !
      </h2>
      <p class="lead">Peduli Diri adalah website untuk menyimpan data perjalanan anda.</p>
      <div class="mt-4">
        <a href="/inputperjalanan" class="btn btn-outline-white btn-lg btn-icon icon-left"> Input data</a> -
        <a href="/dataperjalanan" class="btn btn-outline-white btn-lg btn-icon icon-left"> Data perjalanan</a>
    </div>
  </div>
</div>
@endsection