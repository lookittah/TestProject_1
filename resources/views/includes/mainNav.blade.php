<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('index')}}">Testproject1</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{route('index')}}">Homepage</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        </ul>
    </div>
</nav>
