@extends('layout.en.layout')
@section('route')
      <!-- Title Banner -->
       <style>
        .fs-24 em, .fs-24 p{
            font-weight:700;
            
        }
       </style>
      <section class="page-title">
            <div class="container">
                <ul class="breadcrumb unstyled">
                    <li><a href="/">Home</a></li>
                    <li><a class="active" href="/about">About</a></li>
                </ul>
                <h1 class="mb-0 color-dark-2">About</h1>
                <h3>About</h3>
            </div>
        </section>
        <!-- title Banner end -->

        <!-- About start -->
        <section class="about-1 mt-5" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100" data-sal-easing="ease-in-out">
            
            <div class="container">
                <div class="row mt-48">
                    <div class="col-lg-7">
                        <img src="assets/media/about/about-2.png" alt="">
                    </div>
                    <div class="col-lg-5">
                        <p class="fs-53 color-dark-2 ls-0">RIYDIG Vision</p>
                        <p class="ps-4">We are a passionate marketing agency dedicated to transforming the way brands connect with their audiences. With a deep understanding of the Egyptian market and beyond, we specialize in creating tailored digital and traditional marketing strategies.</p>

                        <p class="ps-4"> Our mission is to help businesses evolve in a fast-paced digital world and unlock their true potential. We drive growth, increase engagement, and deliver measurable results.</p>
                        <p class="fs-53 color-dark-2 ls-0">Our Philosophy</p>
                        <p class="ps-4">At Riydig, we believe in the power of digital marketing to create real connections in a constantly evolving world.<br> People today shape and drive the brands they love, and we see our role as amplifying those connections through meaningful, data-driven insights and creativity.
                        </p> 
                        <p class="fs-53 color-dark-2 ls-0">Our mission</p>
                        <p class="ps-4">We empower brands to thrive by deeply understanding audiences, crafting impactful experiences, and continuously innovating in the digital space. We’re here to connect you with the people who matter most.
                        </p>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-6">
                        <div class="steps ">
                            <div class="title fs-155 fw-7 color-gray text-uppercase">Steps</div>
                            <div class="row mb-5">
                                <div class="col-lg-3 col-sm-2 counting">
                                    <strong class="fs-91 color-dark-2 text-uppercase lh-100 position-relative z-2">01</strong>
                                </div>
                                <div class="col-lg-9 col-sm-10">
                                    <p><strong class="color-dark-2">Discover:</strong> We learn about your business,
                                        goals,<br> and audience to create a digital strategy<br> tailored to your needs.
                                    </p>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-lg-3 col-sm-2 counting">
                                    <strong class="fs-53 color-dark-2 text-uppercase lh-100 position-relative z-2">02</strong>
                                </div>
                                <div class="col-lg-9 col-sm-10">
                                    <p><strong class="color-dark-2">Create:</strong> We learn about your business,
                                        goals,<br> and audience to create a digital strategy<br> tailored to your needs.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-sm-2 counting">
                                    <strong class="fs-40 color-dark-2 text-uppercase lh-100 position-relative z-2">03</strong>
                                </div>
                                <div class="col-lg-9 col-sm-10">
                                    <p><strong class="color-dark-2">Create:</strong> We learn about your business,
                                        goals,<br> and audience to create a digital strategy<br> tailored to your needs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img alt="" src="assets/media/about/about-3.png" class="w-100">
                    </div>
                </div> -->
            </div>
        </section>
          <!-- Reviews start -->
        <section class="reviews-2 mb-48 review-section" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100" data-sal-easing="ease-in-out">
          <div class="heading-1 left">
              <h1 class="color-dark-2 fs-91 fw-7 text-uppercase lh-100 bg-img">Our Process
              </h1>
          </div>
          <div class="container">
              <h2 class="vertitle-title">RIYDIG</h2>
              <div class="row mt-100">
                  <div class="col-lg-12 col-sm-12 " >
                  <div class="row">
                <div class="col-lg-3">
                    <img class="" alt="" src="assets/media/service/s3-1.png">
                </div>
                <div class="col-lg-9">
                    <!-- <h1 class="fs-53 fw-7 color-dark-1">Social Media Management</h1> -->
                    <div class="row">
                        <div class="col-lg-8">
                        <h2 class="fs-53 color-dark-2">Riydig Method</h2>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <ul class="unstyled points">
                                        <li class="fs-24"><p><em style="color: #6e00ca;">Discover:</em> We dig deep into the essence of your brand, revealing unique strengths that set you apart.</p></li>
                                        <li class="fs-24"><p><em style="color: #6e00ca;">Create:</em> Build Brands’ authentic voice and bespoke strategies, fueled by insights and creative minds.</p></li>
                                        <li class="fs-24"><p><em style="color: #6e00ca;">Launch:</em> implement your strategy with precision, ensuring a smooth and impactful entry into the market.</p> </li>
                                        <li class="fs-24"><p><em style="color: #6e00ca;">Evolve:</em> Continuously optimize for results, ensuring your brand stands out in a dynamic market.</p></li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                    <!-- <div class="row mt-4">
                        <div class="col-lg-6 offset-lg-6">
                            <h2 class="fs-53 color-dark-2">Riydig Method</h2>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <ul class="unstyled points">
                                        <li class="fs-24">Content Strategy</li>
                                        <li class="fs-24">Engagement</li>
                                        <li class="fs-24">Analytics</li>
                                        <li class="fs-24">Collaboration</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <ul class="unstyled points">
                                        <li class="fs-24">Content Strategy</li>
                                        <li class="fs-24">Engagement</li>
                                        <li class="fs-24">Analytics</li>
                                        <li class="fs-24">Collaboration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
         
                  </div>
        
                
              </div>
          </div>
      </section>
      <!-- Reviews end -->
      <!-- <section class="reviews-2 mb-48 review-section" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100" data-sal-easing="ease-in-out">
          <div class="heading-1 right">
              <h1 class="color-dark-2 fs-91 fw-7 text-uppercase lh-100 bg-img">Our Valued Team
              </h1>
          </div>
          
      </section> -->
        <!-- <section class="team-3 mt-100 mb-48 container">
            
            <div class="row">
                
                <div class="col-lg-4 col-sm-6 mb-64">
                    
                    <div class="box">
                        <div class="img-box text-center">
                            <div class="social-box first">
                            <a class="social-icon shadow" href=""><i class="fab fa-dribbble"></i></a>
                            </div>
               
                            <img class="team-img shadow w-100" alt="" src="assets/media/crew/image-5.png">
                        </div>
                        <a href="!#">
                            <h3 class="fs-53 mb-2 mt-4 lh-100 color-dark-2">Olivia Green</h3>
                            <p>Creative Director</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-64">
                    <div class="box">
                        <div class="img-box text-center">
                            <div class="social-box first">
                            <a class="social-icon shadow" href=""><i class="fab fa-dribbble"></i></a>
                            </div>
                    
                            <img class="team-img shadow w-100" alt="" src="assets/media/crew/Image.png">
                        </div>
                        <a href="!#">
                            <h3 class="fs-53 mb-2 mt-4 lh-100 color-dark-2">Maya Singh</h3>
                            <p>Social Media Manager</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-64">
                    <div class="box">
                        <div class="img-box text-center">
                            <div class="social-box first">
                            <a class="social-icon shadow" href=""><i class="fab fa-dribbble"></i></a>
                            </div>
                
                            <img class="team-img shadow w-100" alt="" src="assets/media/crew/Image-2.png">
                        </div>
                        <a href="!#">
                            <h3 class="fs-53 mb-2 mt-4 lh-100 color-dark-2">Leo Nguyen</h3>
                            <p>Graphic Designer</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-64">
                    <div class="box">
                        <div class="img-box text-center">
                            <div class="social-box first">
                            <a class="social-icon shadow" href=""><i class="fab fa-dribbble"></i></a>
                           
                            </div>
               
                            <img class="team-img shadow w-100" alt="" src="assets/media/crew/Image-3.png">
                        </div>
                        <a href="!#">
                            <h3 class="fs-53 mb-2 mt-4 lh-100 color-dark-2">Jaxon Lee</h3>
                            <p>Jaxon Lee</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-64">
                    <div class="box">
                        <div class="img-box text-center">
                            <div class="social-box first">
                            <a class="social-icon shadow" href=""><i class="fab fa-dribbble"></i></a>
                            </div>
              
                            <img class="team-img shadow w-100" alt="" src="assets/media/crew/Image-1.png">
                        </div>
                        <a href="!#">
                            <h3 class="fs-53 mb-2 mt-4 lh-100 color-dark-2">Max Cooper</h3>
                            <p>Brand Strategist</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-64">
                    <div class="box">
                        <div class="img-box text-center">
                            <div class="social-box first">
                            <a class="social-icon shadow" href=""><i class="fab fa-dribbble"></i></a>
                            </div>
              
                            <img class="team-img shadow w-100" alt="" src="assets/media/crew/image-5.png">
                        </div>
                        <a href="!#">
                            <h3 class="fs-53 mb-2 mt-4 lh-100 color-dark-2">Sienna Kim</h3>
                            <p>Copywriter</p>
                        </a>
                    </div>
                </div>
            </div>
           
        </section> -->

        <section class="reviews-2 mb-48 review-section sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100" data-sal-easing="ease-in-out">
          <div class="heading-1 right">
              <h1 class="color-dark-2 fs-91 fw-7 text-uppercase lh-100 bg-img">Our Team</h1>
          </div>
          <div class="container">
              <h2 class="vertitle-title">Team</h2>
              <div class="row mt-100">
                  <div class="col-lg-12 col-sm-12 ">
                  <div class="row">
                <div class="col-lg-3 offset-lg-1">
                    <img class="" alt="" src="assets/media/service/s3-3.png">
                </div>
                <div class="col-lg-8">
                    <!-- <h1 class="fs-53 fw-7 color-dark-1">Social Media Management</h1> -->
                    <div class="row">
                        <div class="col-lg-8 offset-lg-4">
                        <h2 class="fs-53 color-dark-2">Meet the Minds Behind Riydig</h2>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 ">
                                    <ul class="unstyled points">
                                        <li class="fs-24"><h4><em style="color: #6e00ca;">Real Estate &amp; Malls</em> </h4></li>
                                        <li class="fs-24"><h4><em style="color: #6e00ca;">Food &amp; Beverage</em> </h4></li>
                                        <li class="fs-24"><h4><em style="color: #6e00ca;">Automotivee</em> </h4></li>
                                       
                                    </ul>
                                </div> 
                                <div class="col-lg-6 col-sm-12">
                                    <ul class="unstyled points">
                                        <li class="fs-24"><h4><em style="color: #6e00ca;">Home Appliances</em> </h4></li>
                                        <li class="fs-24"><h4><em style="color: #6e00ca;">Telecome &amp;Tech</em> </h4></li>
                                        <li class="fs-24"><h4><em style="color: #6e00ca;">Government &amp;Corporate</em> </h4></li>
                                       
                                    </ul>
                                </div>
                        </div>
                    </div>
                    <!-- <div class="row mt-4">
                        <div class="col-lg-6 offset-lg-6">
                            <h2 class="fs-53 color-dark-2">Riydig Method</h2>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <ul class="unstyled points">
                                        <li class="fs-24">Content Strategy</li>
                                        <li class="fs-24">Engagement</li>
                                        <li class="fs-24">Analytics</li>
                                        <li class="fs-24">Collaboration</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <ul class="unstyled points">
                                        <li class="fs-24">Content Strategy</li>
                                        <li class="fs-24">Engagement</li>
                                        <li class="fs-24">Analytics</li>
                                        <li class="fs-24">Collaboration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
         
                  </div>
        
                
              </div>
          </div>
      </div></section>
@endsection