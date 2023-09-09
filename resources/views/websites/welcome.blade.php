@extends('websites.master')

@section('body')
  <div class="container-fluid"
style="background-color: #0ea5e9"
  >
    <div class="container ">
        <div class="d-flex flex-column vh-100 justify-content-center align-items-center">
        <h1 class="text-uppercase text-white text-center">WellCome to<br>my simple project</h1>
        <a href="{{ route('home') }}" class="btn btn-primary">
            GO TO HOME
        </a>
        </div>
  </div>
  </div>
@endsection
