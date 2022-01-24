<!DOCTYPE html>
<html>
<title>Diplomant's system</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<body>
<div class="w3-collapse">
    <div style="" class="w3-indigo w3-indigo w3-wide w3-padding w3-card">
        <a href="{{url('/')}}" class="w3-bar-item w3-button"><b>Diplomant's System</b></a>

        <div class="w3-right w3-hide-small">
            <a href="{{url('/index')}}" class="w3-bar-item w3-button">All Projects</a>
            <a href="{{url('/show')}}" class="w3-bar-item w3-button">Your Projects</a>
            <a href="{{url('/search')}}" class="w3-bar-item w3-button">Search</a>
        </div>
    </div>
</div>

@yield('content')

</body>

<footer class="w3-center w3-black w3-padding-16">
    <p>2022</p>
</footer>


</html>

