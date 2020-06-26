@extends('layouts.admin')

@section('CustomStyles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/cutsom-normal.css') }}"/>>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10 col-sm-12">
            <div class="card">
                <div class="card-header">
                    Admins
                    <a href="{{ route('admins.create') }}">
                        <button class="btn btn-primary">Create</button>
                    </a>
                </div>
                <div class="card-body">
                    @include('components.admin.messages')
                    <div class="table-responsive">
                        <table class="table table-primary">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"> Id </th>
                                    <th scope="col"> First Name </th>
                                    <th scope="col"> Last Name </th>
                                    <th scope="col"> Email </th>
                                    <th scope="col"> Phone </th>
                                    <th scope="col"> Super </th>
                                    <th scope="col"> View </th>
                                    <th scope="col"> Update </th>
                                    <th scope="col"> Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($admins as $admin)
                                <tr>
                                    <th scope="row"> {{ $admin->id }} </th>
                                    <td> {{ $admin->first_name }} </td>
                                    <td> {{ $admin->last_name }} </td>
                                    <td> {{ $admin->email }} </td>
                                    <td> {{ $admin->phone }} </td>
                                    <td>
                                        @if($admin->is_super == true)
                                        True
                                        @else
                                        False
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admins.show', $admin->id) }}">
                                            <button class="btn btn-primary">View</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admins.edit', $admin->id) }}">
                                            <button class="btn btn-secondary">Update</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:;" data-toggle="modal" data-target="#DeleteModal">
                                            <button onclick="deleteAdmin({{ $admin->id }})" class="btn btn-danger">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="DeleteModal" class="modal fade text-danger" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <form action="" id="deleteForm" method="post">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h2 class="modal-title text-center"><strong class="text-white">DELETE CONFIRMATION</strong></h2>
                </div>
                <div class="modal-body">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <p class="text-left">Are You Sure Want To Delete Admin?</p>
                </div>
                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="submitDeleteForm()">Yes, Delete</button>
                    </center>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('custom-scripts')
<script src="{{ asset('js/admin/admins-delete.js') }}" defer></script>
@endsection