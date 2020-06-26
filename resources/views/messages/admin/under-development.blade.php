@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Page Underdevelopment</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    This page is in development
                    @isset($goback)
                    <a href="{{ route('go.back', $goback) }}">
                        <button type="button" class="btn btn-danger">
                        {{ __('Back') }}
                        </button>
                    </a>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
@endsection