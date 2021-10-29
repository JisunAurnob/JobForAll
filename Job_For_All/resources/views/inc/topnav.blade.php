<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #282044;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
        </li>
        @if(Session::has('admin'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboardAdmin') }}">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Manage
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('seekersList')}}">Job Seeker</a>
            <a class="dropdown-item" href="{{route('adminSignup')}}">Freelance Employer</a>
            <a class="dropdown-item" href="{{route('adminSignup')}}">Corporate Employer</a>
            <a class="dropdown-item" href="{{route('showAllPost')}}">Posts</a>
            <a class="dropdown-item" href="{{route('adminSignup')}}">Queries</a>
        </li>
        @endif
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Session::has('admin'))
        <li class="nav-item">
          <a class="nav-link" href="{{route('adminProfile')}}">Welcome {{Session()->get('admin')}}</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-danger" href="{{route('logout')}}">Logout</a>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            SignUp
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('adminSignup')}}">Admin</a>
            <a class="dropdown-item" href="#">Job Seeker</a>
            <a class="dropdown-item" href="#">Freelance Employer</a>
            <a class="dropdown-item" href="#">Corporate Employer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>@endif
      </ul>
    </div>
  </nav>