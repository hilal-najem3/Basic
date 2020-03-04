@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MAIN Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::guard('web')->check())
                        <p class="text-success">
                            You are Logged in as user
                        </p>
                    @else
                        <p class="text-danger">
                            You are Logged Out as user
                        </p>
                    @endif

                    @if(Auth::guard('admin')->check())
                        <p class="text-success">
                            You are Logged in as admin
                        </p>
                    @else
                        <p class="text-danger">
                            You are Logged Out as admin
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection