@extends('layouts.app')
@section ('content')
  <div class="page-card page-contact text-center d-flex justify-content-center align-items-center py-md-12">
    <div class="card-form px-5 bg-white mt-md-5 mb-md-5">
      <div class="text-center">
        <h2 class="mb-2 text-dark">Contact</h2>
        <p class="mb-8 px-3">Submit your details along with your enquiry and we will be in contact with you shortly.</p>
      </div>
      {{-- <form role="form">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="" required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" type="textarea" id="message" placeholder="" rows="7"></textarea>
        </div>
        <div class="mt-7">
          <button class="btn btn-outline-primary btn-sm">Send</button>
        </div>
      </form> --}}
      {!! do_shortcode('[ninja_form id=1]') !!}
    </div>
  </div>
@endsection
