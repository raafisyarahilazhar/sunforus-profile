@extends('.layout')

@section('quotes')
    <!-- Section Banner Quotes -->
    <section class="section-header text-center">
        <h2>Sebuah curahan hati</h2>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#ffffff"
            fill-opacity="1"
            d="M0,32L40,80C80,128,160,224,240,234.7C320,245,400,171,480,149.3C560,128,640,160,720,192C800,224,880,256,960,240C1040,224,1120,160,1200,144C1280,128,1360,160,1400,176L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
          ></path>
        </svg>
      </section>
      <!-- End Section Banner Quotes -->
  
      <!-- Section Quotes -->
      <section class="section-quotes">
        <div class="container">
          <div class="row justify-content-center">
            @foreach ($quotes as $quote)
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <div class="card-body text-center">"{{ $quote->quote }}"</div>
                  </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center mt-5">
              {{ $quotes->links() }}
            </div>
          </div> 
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#ffc107"
            fill-opacity="1"
            d="M0,32L24,69.3C48,107,96,181,144,181.3C192,181,240,107,288,90.7C336,75,384,117,432,149.3C480,181,528,203,576,208C624,213,672,203,720,192C768,181,816,171,864,144C912,117,960,75,1008,85.3C1056,96,1104,160,1152,160C1200,160,1248,96,1296,80C1344,64,1392,96,1416,112L1440,128L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"
          ></path>
        </svg>
      </section>
      <!-- End Section Quotes -->
@endsection