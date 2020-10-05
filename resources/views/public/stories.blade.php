@extends('layout.index')
  @section('content')

    <section class="home-slider inner-page owl-carousel">
      <div class="slider-item dark" style="background-image: url('{{asset('/fontend/img/slider-1.jpg')}}');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>Success Stories</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Success Stories</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- END slider -->

    
    
    <section class="section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <a href="stories-single.html" class="link-thumbnail">
              <h3><span class="date">January 31, 2018</span> "Being loved has taught me how to love"</h3>
              <span class="ion-plus icon"></span>
              <img src="{{asset('/fontend/img/work_thumb_1.jpg')}}" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <a href="stories-single.html" class="link-thumbnail">
              <h3><span class="date">January 31, 2018</span>  Becoming a perfect parent out of imperfect </h3>
              <span class="ion-plus icon"></span>
              <img src="{{asset('/fontend/img/work_thumb_2.jpg')}}" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <a href="stories-single.html" class="link-thumbnail">
              <h3><span class="date">January 31, 2018</span> Home sweet home</h3>
              <span class="ion-plus icon"></span>
              <img src="{{asset('/fontend/img/work_thumb_3.jpg')}}" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <a href="stories-single.html" class="link-thumbnail">
              <h3><span class="date">January 31, 2018</span> Home sweet home</h3>
              <span class="ion-plus icon"></span>
              <img src="{{asset('/fontend/img/work_thumb_3.jpg')}}" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <a href="stories-single.html" class="link-thumbnail">
              <h3><span class="date">January 31, 2018</span> "Being loved has taught me how to love"</h3>
              <span class="ion-plus icon"></span>
              <img src="{{asset('/fontend/img/work_thumb_1.jpg')}}" alt="Image placeholder" class="img-fluid">
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-12">
            <a href="stories-single.html" class="link-thumbnail">
              <h3><span class="date">January 31, 2018</span>  Becoming a perfect parent out of imperfect </h3>
              <span class="ion-plus icon"></span>
              <img src="{{asset('/fontend/img/work_thumb_2.jpg')}}" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          
        </div>
        <!-- END row -->
      </div>
    </section>
    

    

    <section class="section-subscribe">
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