@section('title', 'Admin Jobs Applied')
@extends('layouts.admin-master')
@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-2">left</div>
        <div class="col-10">
            <!-- wirte content from here open -->
            <h1> Applied Jobs List</h1>
            <table class="table">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Applied Jobs</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courseCounts as $courseCount)
            <tr>
                <td>{{ $courseCount->course }}</td>
                <td>{{ $courseCount->user_count }}   </td>
                <td>
                    <a href="{{ route('applied.jobs.view', ['course' => $courseCount->course]) }}" class="btn btn-primary">View Users</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
            <!-- wirte content from here close -->
        </div>
    </div>
</div>
@endsection
