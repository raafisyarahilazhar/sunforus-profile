@extends('.layout')

@section('home')
    <!-- Section Banner -->
    <section class="jumbotron text-center">
        <div class="container mt-5 mb-5">
          <img src="{{ 'library/img/sunforus.png' }}" alt="sunforus" width="180" class="rounded-circle" />
          <h1 class="display-3 mt-2">SUNFORUS</h1>
          <p class="lead">Stay on the track</p>
          <a href="/about" class="btn btn-warning">We're Here</a>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="mt-5">
          <path
            fill="#ffc107"
            fill-opacity="1"
            d="M0,32L24,69.3C48,107,96,181,144,181.3C192,181,240,107,288,90.7C336,75,384,117,432,149.3C480,181,528,203,576,208C624,213,672,203,720,192C768,181,816,171,864,144C912,117,960,75,1008,85.3C1056,96,1104,160,1152,160C1200,160,1248,96,1296,80C1344,64,1392,96,1416,112L1440,128L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"
          ></path>
        </svg>
      </section>
      <!-- End Section Banner -->
@endsection