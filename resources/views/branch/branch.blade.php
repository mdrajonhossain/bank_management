<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('public/user/styles.css') }}" rel="stylesheet" />
</head>

<body>

    <!-- Header -->
    @include('user/header')

    <!-- Sidebar (hidden on mobile) -->
    <!-- <div class="sidebar d-none d-md-block">
        <h3>{{ Auth::user()->name; }}</h3>
        <a href="#">Dashboard</a>
        <a href="{{url('/user/fdr')}}">FDR</a>
        <a href="#">Link 3</a>
        <a href="#">Link 4</a>
    </div> -->
    @include('branch/leftbar')

    <!-- Content -->
    <div class="content">
        <h1>Dashboard</h1>
        <h3>Islamic Bank Branch</h3>
        <p>This is the main content area.</p>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>