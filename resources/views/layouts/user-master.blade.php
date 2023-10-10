<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>

    <link href="{{asset('assets/admin/admin-css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/admin-css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <style>
        .list-group {
            width: 250px;
            margin: auto;
            float: left;
            padding-right: 5px;
            position: sticky;
            top: 0;
            overflow: auto;
            z-index: 1;
            height: 100vh;
        }

        .list-group a {
            text-decoration:none;
        }
        .list-group-item {
            background-color: #f8f9fa;
        }

        .list-group-item.active {
            background-color: #007bff;
            color: #fff;
        }

    </style>


    </style>
</head>

<body>
    <div class="list-group">
        <a href="#" class="list-group-item active"><i class="fa fa-user"></i> <span> Hi  {{Auth::user()->name}}</span></a>
        <a href="{{route('pages.cv.index')}}" class="list-group-item"><i class="fa fa-credit-card"></i> <span>Cv Builder</span></a>
        <a href="{{route('user.profile.seeting')}}" class="list-group-item"><i class="fa fa-question-circle"></i> <span>Profile Setting</span></a>
        <a href="#" class="list-group-item"><i class="fa fa-arrow-circle-o-left"></i> <span>Sandbox Account</span></a>
        <a href="#" class="list-group-item"><i class="fa fa-book"></i> <span>QuickStart Overview</span></a>
        <a href="#" class="list-group-item"><i class="fa fa-compass"></i> <span>Documentation</span></a>
        <a href="#" class="list-group-item"><i class="fa fa-key"></i> <span> Settings</span></a>
        <a href="#" class="list-group-item"><i class="fa fa-credit-card"></i> <span>Cv Builder</span></a>
        <a href="#" class="list-group-item"><i class="fa fa-question-circle"></i> <span>Support</span></a>
        <a href="#" class="list-group-item"><i class="fa fa-arrow-circle-o-left"></i> <span>Sandbox Account</span></a>
        <a href="#" class="list-group-item"><i class="fa fa-book"></i> <span>QuickStart Overview</span></a>
        <a href="#" class="list-group-item"><i class="fa fa-compass"></i> <span>Documentation</span></a>
        <a href="#" class="list-group-item"><i class="fa fa-key"></i> <span> Settings</span></a>
        <a href="#" class="list-group-item"><i class="fa fa-credit-card"></i> <span>Cv Builder</span></a>
        <a class="list-group-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out fa-lg"></i>Logout </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    @yield('content')
    <script>
        $(document).ready(function () {
            $('.list-group-item').click(function (e) {
                e.preventDefault();
                $('.list-group-item').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>

</body>

</html>
