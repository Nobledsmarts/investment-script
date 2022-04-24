@include('visitor.index.header')
<main>
    <!-- Start Breadcrumb Area -->
        <div class="page-area bread-pd">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-title text-center">
                            <h2>FAQ</h2>
                            <div class="bread-come">
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb purple lighten-4 justify-content-center">
                                        <li class="breadcrumb-items"><a class="black-text" href="#">Home</a><i class="ti-angle-right"
                                            aria-hidden="true"></i></li>
                                        <li class="breadcrumb-items"><a class="black-text" href="#">About us</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area -->
         <!-- Start FAQ area -->
        <div class="faq-area bg-color area-padding">
            <div class="container">
                <div class="row">
                   <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="section-headline text-center">
                            <h2>Important Faq</h2>
                            <p>
                              See some frequently asked questions
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Column Start -->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="company-faq-left">
                            <div class="faq_inner">
                                <div id="accordion">
                                  @foreach($faqs as $id => $faq)
                                    @if($id%2 != 1)
                                      <div class="card">
                                        <div class="card-header white-bg" id="headingOne">
                                          <h4 class="faq-top-text">
                                            <button class="faq-accordion-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                              {{ $id + 1}}. {{ $faq->question }} 
                                            </button>
                                          </h4>
                                        </div>

                                        <div id="collapseOne" class="collapse show " aria-labelledby="headingOne" data-parent="#accordion">
                                          <div class="card-body">
                                          {{ $faq->answer }} 
                                          </div>
                                        </div>
                                      </div>
                                    @endif
                                  @endforeach
                                </div>
                            </div>
                            <!-- End FAQ -->
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="company-faq">
                            <div class="faq_inner">
                                <div id="accordion_2">
                                @foreach($faqs as $id => $faq)
                                    @if($id%2 != 0)
                                      <div class="card">
                                        <div class="card-header white-bg" id="headingOne">
                                          <h4 class="faq-top-text">
                                            <button class="faq-accordion-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                              {{ $id + 1}}. {{ $faq->question }} 
                                            </button>
                                          </h4>
                                        </div>

                                        <div id="collapseOne" class="collapse show " aria-labelledby="headingOne" data-parent="#accordion">
                                          <div class="card-body">
                                          {{ $faq->answer }} 
                                          </div>
                                        </div>
                                      </div>
                                    @endif
                                  @endforeach
                                </div>
                            </div>
                            <!-- End FAQ -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End FAQ area -->
        <!-- Start Subscribe area -->
        <div class="subscribe-area bg-color">
            <div class="container">
                <div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="subscribe-inner">
						    <div class="subdcribe-content">
                                <div class="section-headline text-center">
                                    <h2>Payment methods</h2>
                                    <p>Help agencies to define their new business objectives and then create professional software.</p>
                                </div>
                                <div class="subs-form">
                                    <form id="contactForm" method="POST" action="http://rockstheme.com/rocks/live-goldhyip/contact.php" class="contact-form">
                                        <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                        <button type="submit" id="submit" class="add-btn">Subscribe</button>
                                    </form>  
                                </div>
                                <div class="brand-content">
                                    <div class="brand-carousel owl-carousel">
                                        <div class="single-brand-item">
                                            <a href="#"><img src="img/brand/1.png" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="img/brand/2.png" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="img/brand/3.png" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="img/brand/4.png" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="img/brand/5.png" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="img/brand/6.png" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="img/brand/7.png" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="img/brand/8.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
						    </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe area -->   
    </main>
@include('visitor.index.footer')
