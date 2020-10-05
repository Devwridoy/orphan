@extends('layout.index')
  @section('content')

      <section class="home-slider inner-page owl-carousel">
      <div class="slider-item " style="background-image: url('{{asset('/fontend/img/slider-2.jpg')}}');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>Contact</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- END slider -->

    
    
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 order-2 sidebar">
            

            <div class="sidebar-box">
              <h3 class="mb-4">Contact Details</h3>
              <h5 class="text-uppercase mb-3 h6 text-black">Address</h5>
              <p class="mb-5">75/1/1 <br> Sukrabad <br> Dhaka - 1207</p>
              
              <h5 class="text-uppercase mb-3 h6 text-black">Email Us At</h5>
              <p class="mb-5"><a href="mailto:info@yourdomain.com">ashraful35-1685@diu.edu.bd</a> <br> <a href="mailto:ashraful35-1685@diu.edu.bd">ashraful35-1685@diu.edu.bd</a></p>
              
              <h5 class="text-uppercase mb-3 h6 text-black">Call Us</h5>
              <p>Phone: +01777 000 0000 <br> Mobile: +01777 000 0000 <br> Fax: +01777 000 0000</p>
            </div>

            

          </div>
          <div class="col-md-8 order-1 main">
            <div class="row">
              
              <div class="col-md-12">
                <h2>Let's chat</h2>
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <form action="{{ url('add-contact') }}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" class="form-control ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="phone">Phone</label>
                      <input type="text" name="phone" id="phone" class="form-control ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" class="form-control ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Write Message</label>
                      <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
          
        </div>
        <!-- END row -->
      </div>
    </section>
    

    

    <section class="section-subscribe bg-light">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12 my-3">
            <h2 class="text-uppercase heading">Get News &amp; Updates</h2>
          </div>
          <div class="col-md-12">
            <form method="post" action="">
              <div class="row">
                <div class="col-md-4 mb-3">
                  <input type="text" class="form-control btn-block" placeholder="Your Name">    
                </div>
                <div class="col-md-4 mb-3">
                  <input type="email" class="form-control btn-block" placeholder="Your Email">
                </div>
                <div class="col-md-4 mb-3">
                  <input type="submit" class="btn btn-primary btn-block" value="Subscribe">
                </div>
              </div>
              
               
            </form>
          </div>
        </div>
      </div>
    </section>
  
  @endsection