@extends('layouts.app')
@section ('content')
  <div class="page-card page-request-an-account text-center d-flex justify-content-center align-items-center py-md-12">
    <div class="card-form px-5 bg-white mt-md-5 mb-md-6">
      <div class="text-center">
        <h2 class="mb-2 text-dark">Order testing</h2>
        <p class="mb-8 px-3">Send your request and we will be in contact with you shortly.</p>
      </div>
      {{-- <form role="form">
        <div class="form-group">
          <label for="name">Your name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="" required>
        </div>
        <div class="form-group">
          <label for="company">Company name</label>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="" required>
        </div>
        <div class="mt-8">
          <button class="btn btn-outline-primary btn-md mt-6">Request an account</button>
        </div>
      </form> --}}
      {!! do_shortcode('[ninja_form id=2]') !!}
    </div>
  </div>
@endsection
