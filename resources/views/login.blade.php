@extends('layouts.app')
@section ('content')
  <div class="page-card text-center d-flex justify-content-center align-items-center py-md-12">
    <div class="card-form px-5 bg-white mt-md-5 mb-md-6">
      <div class="text-center">
        <h2 class="mb-2 text-dark">Account login</h2>
        <p class="mb-8 px-3">Login and order testing through the samples submission form.</p>
      </div>
      <form role="form">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="name" name="name" placeholder="" required>
        </div>
        <div class="pb-2">
          <a class="font-weight-bold text-center" href="#">Forgot your email or password?</a>
        </div>
        <div class="mt-12">
          <a class="btn btn-outline-primary btn-sm" href="#">Log in now</a>
        </div>
      </form>
    </div>
  </div>
@endsection
