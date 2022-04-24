@include('visitor.index.header')
    <main>
        <!-- Start intro area -->
        <div class="intro-area intro-home">
            <div class="bg-wrapper">
            	<img src="{{ asset('index/img/slider/bg.jpg') }}" alt="">
            </div>
			<div class="intro-content">
				<div class="slider-content">
					<div class="container">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6">
								<div class="slide-all-text">
								    <!-- layer 1 -->
                                   <div class="layer-1 wow fadeInUp" data-wow-delay="0.3s">
                                        <h4 class="title-1">Safe and secure investment company</h4>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-2 wow fadeInUp" data-wow-delay="0.3s">
                                        <h1 class="title-2">Invest for future in best platform</h1>
                                    </div>
                                    <!-- layer 3 -->
                                        <div class="layer-3 wow fadeInUp" data-wow-delay="0.7s">
                                        <a href="/register" class="ready-btn" >Get Started</a>
                                    </div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6">
								
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <!-- End intro Area -->
        <!-- Start Counter area -->
        <div class="counter-area fix bg-color area-padding-3">
            <div class="container">
                <!-- Start counter Area -->
                 <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-fun">
                            <span class="counter-icon"><i class="flaticon-034-reward"></i></span>
                            <div class="counter-text">
                                <h2><span class="count">22609</span>+</h2>
                                <h4>All Members</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-fun">
                            <span class="counter-icon"><i class="flaticon-016-graph"></i></span>
                            <div class="counter-text">
                                <h2>$<span class="count">500</span>k</h2>
                                <h4>Total Deposit</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-fun">
                            <span class="counter-icon"><i class="flaticon-043-world"></i></span>
                            <div class="counter-text">
                                <h2>$<span class="count">2</span>m</h2>
                                <h4>Total Withdrawal</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Counter area -->
        <!-- Start About Area -->
        <div class="about-area bg-color fix area-padding-2">
            <div class="container">
               <div class="row">
                   <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="section-headline text-center">
                            <h2>About {{ env("SITE_NAME") }}</h2>
                            <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
                        </div>
                    </div>
               </div>
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="about-video">
                            <img src="{{ asset('index/img/about/ab.jpg') }}" alt="">
                            <div class="video-content">
                                <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play video-zone">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="support-wraper">
                            <div class="support-carousel owl-carousel item-indicator">
                                <div class="single-support">
                                    <div class="support-services">
                                        <img class="support-images" src="{{ asset('index/img/about/withdraw.png') }}" alt="">
                                        <div class="support-content">
                                            <h4>Instant Withdrawal</h4>
                                            <p>
                                                Withdrawals are instant, immediately a user requests for a withdrawal, if user's account is eligible for withdrawal, withdrawal is processed immediately and funds sent to user's wallet.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="support-services">
                                        <img class="support-images" src="{{ asset('index/img/about/refferal.png') }}" alt="">
                                        <div class="support-content">
                                            <h4>Refferral bonus</h4>
                                            <p>
                                                A user stands a chance of earning upto 10% of any approved deposits commission created by users which they invited to the company.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-support">
                                    <div class="support-services">
                                        <img class="support-images" src="{{ asset('index/img/about/support.png') }}" alt="">
                                        <div class="support-content">
                                            <h4>Live Support</h4>
                                            <p>
                                                We have the best active customer services, our online support team are always available 24/7 to meet your demands.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="support-services">
                                        <img class="support-images" src="{{ asset('index/img/about/ab-icon4.png') }}" alt="">
                                        <div class="support-content">
                                            <h4>Super security</h4>
                                            <p>
                                                SilverCapitalTrade is encrypted with a strong SSL, our security teams are always working relentlessly to make sure that the platform is as secure as possible.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- Start services -->
                 </div>
            </div>
        </div>
        <!-- End About Area -->
        <!-- Start Investment area -->
        <div class="invest-area bg-color-2 area-padding-2">
            <div class="container">
                <div class="row">
                   <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="section-headline text-center">
                            <h2>Investment plan</h2>
                            <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
                        </div>
                    </div>
               </div>
                <div class="row">
                    @foreach($plans as $plan)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="pri_table_list text-center">
                            @if($plan->minimum_amount < 1500 || $plan->duration < 11)
                            <span class="base">Popular</span>
                            @endif
                            <div class="top-price-inner">
                                <h3>{{ $plan->name }} Plan</h3>
                                <div class="rates">
                                    <span class="prices">{{ $plan->interest_rate }}%</span><span class="users">Daily</span>
                                </div>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Minimum Amount : ${{ $plan->minimum_amount }}</li>
                                <li class="check">Maximum Amount : ${{ $plan->maximum_amount }}</li>
                                <li class="check">Duration : {{ $plan->duration }} {{ $plan->duration < 2 ? 'day' : 'days'}} </li>
                                <li class="check">Average Interest : {{ $plan->duration * $plan->interest_rate }}%</li>
                            </ol>
                            <div class="price-btn">
                                <a class="blue" href="/register">Invest Now</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Investment area -->
        <!-- Start Choose Area -->
        <div class="choose-service-area bg-color area-padding-2">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h2>Why choose us</h2>
                            <p>
                                We are the best when it comes to using the right tools for investment and making great profits which favours both our platform and the clients
                            </p>
						</div>
					</div>
				</div>
                <div class="row">
                    <!-- Start About -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="choose-services ">
                            <div class="choose-top align-items-center">
                                <a class="choose-images" href="#"><i class="flaticon-023-management"></i></a>
                                 <h4>Referral program</h4>
                            </div>
                            <div class="choose-content">
                                <p>
                                    Our referral program is such a big bonus to all our investors, the more users registers through, the more money you make when those users makes approved deposits.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start About -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="choose-services ">
                            <div class="choose-top align-items-center">
                                <a class="choose-images" href="#"><i class="flaticon-036-security"></i></a>
                                <h4>Secure investment</h4>
                            </div>
                            <div class="choose-content">
                                <p>
                                    We are highly interested in securing the properties and assets of our clients, therefore, we make sure that security risks are reduced to the leasts. Our clients data are also protected by end to end encryption
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="choose-services ">
                            <div class="choose-top align-items-center">
                                <a class="choose-images" href="#"><i class="flaticon-003-approve"></i></a>
                                <h4>Registered company</h4>
                            </div>
                            <div class="choose-content">
                                <p>
                                    The company is a registerd company under the United States, with the registration number of - 999999
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="choose-services">
                            <div class="choose-top align-items-center">
                                <a class="choose-images" href="#"><i class="flaticon-042-wallet"></i></a>
                                <h4>Instant withdrawal</h4>
                            </div>
                            <div class="choose-content">
                                <p>
                                    Withdrawal is instant, immediately a user requests for a withdrawal, if user's account is eligible for withdrawal, withdrawal is processed immediately and funds sent to user's wallet.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="choose-services ">
                            <div class="choose-top align-items-center">
                                <a class="choose-images" href="#"><i class="flaticon-032-report"></i></a>
                                <h4>SSL Secured</h4>
                            </div>
                            <div class="choose-content">
                                <p>
                                    The website is protected by Positive SSL
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="choose-services">
                            <div class="choose-top align-items-center">
                                <a class="choose-images" href="#"><i class="flaticon-024-megaphone"></i></a>
                                <h4>24/7 support</h4>
                            </div>
                            <div class="choose-content">
                                <p>
                                    We have dedicated bodied working tirelessly to reachout to users who need assistance, you can always count on them.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Choose area -->
        <!-- Start How to area -->
        <div class="how-to-area bg-color-2 area-padding">
            <div class="container">
                <div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="section-headline text-center">
                            <h2>How to start</h2>
                            <p>
                                Few starts towards your financial freedom
                            </p>
						</div>
					</div>
				</div>
                <div class="row">
                    <!-- single-well end-->
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-how first-item">
                            <div class="how-img">
                                <span class="h-number">01</span>
                                <a class="big-icon" href="#"><img src="{{ asset('index/img/about/h1.png') }}" alt=""></a>
                            </div>
                            <div class="how-wel">
                                <div class="how-content">
                                    <h4>Get access</h4>
                                    <p>
                                        Register an account and get verified to gain access
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-how ">
                            <div class="how-img">
                                <span class="h-number">02</span>
                                <a class="big-icon" href="#"><img src="{{ asset('index/img/about/h2.png') }}" alt=""></a>
                            </div>
                            <div class="how-wel">
                                <div class="how-content">
                                    <h4>Investment</h4>
                                    <p>
                                        Create your first investment, and start receiving profits at intervals, depending on which investment plan you chose.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-how thired-item">
                            <div class="how-img">
                               <span class="h-number">03</span>
                                <a class="big-icon" href="#"><img src="{{ asset('index/img/about/h3.png') }}" alt=""></a>
                            </div>
                            <div class="how-wel">
                                <div class="how-content">
                                    <h4>Withdraw</h4>
                                    <p>
                                        Withdraw money from your account, and receive them in a matter of seconds or minutes in a rare case.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End How to area -->
        <!--Start payment-history area -->
        <div class="payment-history-area fix area-padding">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline left-headline">
                            <h2>Payments update</h2>
                            <p>
                                See Latest live deposits and withdrawals logs
                            </p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12">
                        <!-- Start Nav tabs -->
                        <ul class="nav payment-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" href="#tab-1" role="tab" data-toggle="tab">
                                    <span class="cha-title">Last Deposits</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-2" role="tab" data-toggle="tab">
                                    <span class="cha-title">Last Withdraws</span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Nav tabs -->
					</div>
				</div>
                <div class="row">
					<div class="col-xl-8 col-lg-8 col-md-12">
						<div class="tab-content">
						    <!--Start Tab Content -->
							<div role="tabpanel" class="tab-pane fade in active show" id="tab-1">
                                <div class="deposite-content">
                                    <div class="diposite-box">
                                        <div class="deposite-table">
                                            <table>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Currency</th>
                                                </tr>
                                                @foreach($deposits as $deposit)
                                                <tr>
                                                    <td>{{ $deposit->user->name }}</td>
                                                    <td>{{ $deposit->updated_at }}</td>
                                                    <td>{{ $deposit->amount }}</td>
                                                    <td>{{ $deposit->user_wallet->admin_wallet->currency }}</td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-2">
                                <div class="deposite-content">
                                    <div class="diposite-box">
                                        <div class="deposite-table">
                                            <table>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Currency</th>
                                                </tr>
                                                @foreach($withdrawals as $withdraw)
                                                <tr>
                                                    <td>{{ $withdraw->user->name }}</td>
                                                    <td>{{ $withdraw->updated_at }}</td>
                                                    <td>{{ $withdraw->amount }}</td>
                                                    <td>{{ $withdraw->user_wallet->admin_wallet->currency }}</td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End payment-history area -->
        <!-- Start payment-history area -->
        <div class="profit-calculater-area bg-color-2 fix area-padding">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h2>Profit Calculater</h2>
                            <p>
                                Calculate how much profits you would make on each plan
                            </p>
						</div>
					</div>
				</div>
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-profit-inner">
                            <div class="about-calculater">
                                <h3>About profit calculater</h3>
                                <p>
                                    Using profit calculator you will get a clear view of what your returns in investment of a particular plan would be, with this you will be motivated to invest on the plan that suits you the most.
                                </p>
                            </div>
                        </div>
                    </div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="profit-calculater-inner">
						    <form class="profit-calculator">
                                <div class="row">
                                  <div class="col-lg-6 mb-30">
                                    <label>Choose Plan</label>
                                    <select class="calculater-select-bg">
                                      <option>Silver Plan</option>
                                      <option>Diamond Plan</option>
                                      <option>Platinum Plan</option>
                                      <option>Gold Plan</option>
                                      <option>Premium Plan</option>
                                    </select>
                                  </div>
                                  <div class="col-lg-6 mb-30">
                                    <label>Invest Amount</label>
                                    <input type="text" name="invest_amount" id="invest_amount" placeholder="0.00" class="form-control base--bg">
                                  </div>
                                  <div class="col-lg-12">
                                    <label>Profit Amount</label>
                                    <input type="text" name="profit_amount" id="profit_amount" placeholder="0.00" class="form-control base--bg" disabled="">
                                  </div>
                                </div>
                            </form>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!-- End payment-history area -->
        <!-- Start Reviews Area -->
        <div class="reviews-area bg-color area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="testimonial-inner">
                            <div class="review-head">
                                <h2>What customer says about our company</h2>
                                <p>
                                    Clients who has given us a try have something to say, please go through those ones you can, and analyse within you if this platform is what you want?
                                </p>
                                <a class="reviews-btn anti-btn" href="/reviews">More reviews</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-6">
                        <div class="Reviews-content">
                            <!-- start testimonial carousel -->
                            <div class="testimonial-carousel owl-carousel">
                                @foreach($reviews as $review)
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <div class="clients-text">
                                            <div class="testi-img ">
                                                <img src="{{ asset('index/img/about/h1.png') }}" alt="">
                                                <div class="guest-details">
                                                    <h4>{{ $review->user }}</h4>
                                                    <span class="guest-rev">{{ $review->occupation }}</span>
                                                </div>
                                            </div>
                                            <div class="client-rating">
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                            </div>
                                            <p>
                                            {{ $review->review }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End single item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Reviews area -->
        
        <!-- Start Blog area -->
        <div class="blog-area bg-color area-padding-2">
            <div class="container">
                <div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="section-headline text-center">
                            <h2>Latest Blog</h2>
                            
                        </div>
                    </div>
				</div>
                <div class="row">
                    <!-- Start single blog -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="{{ asset('index/img/blog/b1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-category">
                                   <span>Investor</span>
                                </div>
                                <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        Admin
                                    </span>
                                    <span class="date-type">
                                       <i class="fa fa-calendar"></i>
                                        28 mar, 2021
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        32
                                    </span>
                                </div>
                                <div class="blog-title">   
                                    <a href="#">
                                        <h4>The phrasal sequence of the Lorem Ipsum text.</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="{{ asset('index/img/blog/b2.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                              <div class="blog-category">
                                   <span>Community</span>
                               </div>
                                <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        Admin
                                    </span>
                                    <span class="date-type">
                                       <i class="fa fa-calendar"></i>
                                        21 mar, 2021
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        32
                                    </span>
                                </div>
                               <div class="blog-title">
                                    <a href="#">
                                        <h4>Make sure the prototype looks finished by.</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="{{ asset('index/img/blog/b3.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-category">
                                   <span>Media</span>
                                </div>
                                <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        Admin
                                    </span>
                                    <span class="date-type">
                                       <i class="fa fa-calendar"></i>
                                        14 Mar, 2021
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        32
                                    </span>
                                </div>
                               <div class="blog-title">
                                    <a href="#">
                                        <h4>Designer have to make sure the prototype looks.</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="d-lg-none d-xl-none col-md-6 ">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="{{ asset('index/img/blog/b4.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                               <div class="blog-category">
                                   <span>Profit</span>
                               </div>
                               <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        Admin
                                    </span>
                                    <span class="date-type">
                                       <i class="fa fa-calendar"></i>
                                        28 Feb, 2021
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        32
                                    </span>
                                </div>
                               <div class="blog-title">
                                    <a href="#">
                                        <h4>Designer have to make sure the prototype looks.</h4>
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Blog area -->
        <!-- Start Subscribe area -->
        <div class="subscribe-area bg-color">
            <div class="container">
                <div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="subscribe-inner">
						    <div class="subdcribe-content">
                                <div class="section-headline text-center">
                                    <h2>Payment methods</h2>
                                    
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
                                            <a href="#"><img src="{{ asset('index/img/brand/1.png') }}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{ asset('index/img/brand/2.png') }}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{ asset('index/img/brand/3.png') }}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{ asset('index/img/brand/4.png') }}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{ asset('index/img/brand/5.png') }}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{ asset('index/img/brand/6.png') }}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{ asset('index/img/brand/7.png') }}" alt=""></a>
                                        </div>
                                        <div class="single-brand-item">
                                            <a href="#"><img src="{{ asset('index/img/brand/8.png') }}" alt=""></a>
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
