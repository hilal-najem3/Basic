@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
         <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Options') }}</div>
                <div class="list-group" id="myList">
                  <a class="list-group-item list-group-item-action" href="{{ route('admin.profile') }}">
                    Profile
                  </a>
                  <a class="list-group-item list-group-item-action" href="{{ route('admin.profile.password') }}">
                    Change Password
                  </a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>
                <div class="card-body">
                    @include('components.admin.messages')
                    <form method="POST" id="form-submit" action="{{ route('admin.profile.update', $admin->id) }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name: ') }}</label>
                            <div class="col-md-6 mr">
                                <input id="first_name" type="text" disabled class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $admin->first_name }}" required autocomplete="First Name" autofocus>
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name: ') }}</label>
                            <div class="col-md-6 mr">
                                <input id="last_name" type="text" disabled class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $admin->last_name }}" required autocomplete="Last Name" autofocus>
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email: ') }}</label>
                            <div class="col-md-6 mr">
                                <input id="email" type="text" disabled class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $admin->email }}" required autocomplete="Email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone: ') }}</label>
                            <div class="col-md-6 mr">
                                <input id="phone" type="text" disabled class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $admin->phone }}" autocomplete="Phone" autofocus>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="btnSubmit" type="button" class="btn btn-primary">Enable Form</button>
                                &nbsp;
                                <button id="btnCancel" type="button" class="btn btn-danger">Cancel Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-scripts')
<script src="{{ asset('js/admin/form-submit.js') }}" defer></script>
@endsection