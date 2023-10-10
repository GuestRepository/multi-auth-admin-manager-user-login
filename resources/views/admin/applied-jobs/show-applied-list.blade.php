@section('title', 'Admin Jobs Applied List')
@extends('layouts.admin-master')
@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-2">left</div>
        <div class="col-10">
            <!-- wirte content from here open -->

            <h1 class="text-warning">Applied Jobs Create List <span class="text-danger">{{ $course }}</span></h1>
            @foreach($getCourses as $user)
                <div class="card mt-2 shadow">
                    <div class="card-header">
                        <h4> Name : <span class="text-primary">{{ $user->name }}</span></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>

                                <tr>
                                    <th>Name</th>
                                    <td>{{ $user->name }}</td>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $user->phone }}</td>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $user->name }}</td>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $user->phone }}</td>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    @if($user->is_blocked == 1)
                                    <td class="text-danger"> Block</td>

                                    @elseif($user->is_blocked == 0)
                                    <td class="text-success"> UnBlock</td>

                                    @endif
                                </tr>

                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <tr>
                                    <td>
                                        <a href="{{route('admin.applied.jobs.index')}}" class="text-white btn btn-warning"> <i class="fa fa-home"></i> Back  </a>
                                        <a href="{{url('admin-applied-jobs-edit', $user->id)}}" class="text-white btn btn-warning"> <i class="fa fa-borad"></i> show details</a>
                                    </td>
                                </tr>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

            <!-- wirte content from here close -->
        </div>
    </div>
</div>
@endsection
