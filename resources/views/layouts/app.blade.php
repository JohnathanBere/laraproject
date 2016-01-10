<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="container">
    <h1>TaskManager</h1>
    <header>
        <nav>
            <li><a href="/task">Home</a></li>
            <li><a href="/task/create">Make a new task</a></li>
        </nav>
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ Session::get('flash_message') }}
            </div>
        @endif
    </header>
    @yield('content')
</div>

@yield('footer')
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
    $('div.alert').delay(3000).slideUp(300);
</script>
</body>
</html>