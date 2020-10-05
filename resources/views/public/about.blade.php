@extends('layout.index')
  @section('content')

  	    <section class="home-slider inner-page owl-carousel">
      <div class="slider-item " style="background-image: url('{{asset('/fontend/img/slider-1.jpg')}}');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>About Us</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
              <h3>About Us</h3>
              <ul class="list-unstyled sidelink">
                <li class="active"><a href="#">History</a></li>
                <li><a href="#">Leadership</a></li>
                <li><a href="#">Mission</a></li>
                <li><a href="#">Vision</a></li>
                <li><a href="#">Support</a></li>
              </ul>
            </div>

            

          </div>
          <div class="col-md-8 order-1 main mb-5">
            <div class="row">
              
              <div class="col-md-12">
                <h2>History</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam eaque necessitatibus autem voluptas ab iste, nulla deserunt dicta aperiam tenetur inventore in voluptates fuga, perspiciatis. Libero eveniet repellendus corrupti et impedit, at dolor accusamus numquam quae quidem nihil officiis, sunt totam, excepturi accusantium cumque ullam, id culpa inventore quos? Nam optio similique officia voluptatem sint sit, ea quisquam vero aliquam.</p>
                <blockquote class="blockquote">
                  <p class="mb-0 text-black">&ldquo;There is only one happiness in this life, to love and be loved&rdquo;</p>
                  <footer class="blockquote-footer">George Sand <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
                <p class="element-animate" data-animate-effect="fadeIn"><img src="{{asset('/fontend/img/big_image_1.jpg')}}" alt="Image placeholder" class="img-fluid"></p>
                <p>Molestias nesciunt sequi dignissimos, illo laboriosam deserunt. Mollitia distinctio at ipsam expedita, quo explicabo impedit optio! Et quam at impedit, fugiat. Repudiandae dolore, nemo saepe molestiae optio earum ratione a ipsum voluptatum. Nam et aperiam consequatur odit laudantium labore itaque nihil veritatis repellat distinctio officiis quod pariatur possimus facilis quia, eum, voluptas sint quasi dignissimos aliquid illum a dicta optio.</p>
                <p class="element-animate" data-animate-effect="fadeIn"><img src="{{asset('/fontend/img/slider-1.jpg')}}" alt="Image placeholder" class="img-fluid"></p>
                <p>Molestias nesciunt sequi dignissimos, illo laboriosam deserunt. Mollitia distinctio at ipsam expedita, quo explicabo impedit optio! Et quam at impedit, fugiat. Repudiandae dolore, nemo saepe molestiae optio earum ratione a ipsum voluptatum. Nam et aperiam consequatur odit laudantium labore itaque nihil veritatis repellat distinctio officiis quod pariatur possimus facilis quia, eum, voluptas sint quasi dignissimos aliquid illum a dicta optio.</p>
                
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