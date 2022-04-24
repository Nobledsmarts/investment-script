@include('visitor.index.header')
    <main>
    <!-- Start Breadcrumb Area -->
        <div class="page-area bread-pd">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-title text-center">
                            <h2>Terms</h2>
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
        <!-- Start terms area -->
        <div class="terms-area bg-color area-padding">
            <div class="container">
               <div class="row">
                   <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="section-headline text-center">
                            <h2>Terms & Conditions</h2>
                        </div>
                    </div>
               </div>
                <div class="row">
                    <!-- Start Column Start -->
                    <div class="col-xl-8 col-lg-8 col-md-12">
                        <div class="company-terms">
                            <div class="single-terms">
                               <h4><span class="number">1.</span> <span class="terms-text">  General</span></h4>
                               <p>
                               These Terms and Conditions shall apply to all investment business undertaken by {{ env("SITE_NANE") }} Ltd. and/or {{ env("SITE_NANE") }} Ltd. in its dealings with you (the “Client”) from the date of Client’s receipt of the Terms and Conditions, subject to(a) any amendments in accordance with Clause 19 below; and (b) the terms of any other written agreement between {{ env("SITE_NANE") }} and the Client, the terms of which will prevail. {{ env("SITE_NANE") }} Ltd. is authorised and regulated in the UK by the Financial Conduct Authority (“FCA”) and {{ env("SITE_NANE") }} Ltd. is licensed and regulated by the Jersey Financial Services Commission (“JFSC”). In accordance with the relevant regulatory rules, {{ env("SITE_NAME") }} has categorised you as a professional client or an eligible counterparty as set out in the letter accompanying these Terms and Conditions.In these Terms and Conditions, certain words are defined in Schedule 1
                               </p>
                            </div>
                            <div class="single-terms">
                               <h4><span class="number">2.</span><span class="terms-text"> Services Provided.</span></h4>
                               <p>
                               The investment services which {{ env("SITE_NAME") }} may provide under these Terms and Conditions shall include advising on investments and arranging deals in the following investments (together, where appropriate, with related research, valuation and other services):
                               <br>
                               (a) equity and debt securities; 
                               <br>
                               (b) government and public securities; 
                               <br>
                               (c) warrants; 
                               <br>
                               (d) units in collective investment undertakings; 
                               <br>
                               (e) options, futures, forwards, swaps and other derivative instruments relating to underlying financial  instruments or other assets, rights, obligations, indices and measures (excluding commodities); and 
                               <br>
                               (f) any instruments representing or giving an entitlement to any of the above
                               </p>
                            </div>
                            <div class="single-terms">
                               <h4><span class="number">3.</span><span class="terms-text">Communications with the Client.</span></h4>
                               <p>
                               Communications from {{ env("SITE_NAME") }} to the Client may be made via email or other electronic means or in writing. When using electronic media in relation to agreements and transactions the Client should be aware 
                                that acceptance of an electronic communication may give rise to a contractual obligation on the part of the 
                                Client. The Client will be deemed to have accepted electronic media as an acceptable form of 
                                communication unless the client gives written notice to the contrary as soon as is practicable after the 
                                receipt of these Terms and Conditions
                               </p>
                            </div>
                            <div class="single-terms">
                               <h4><span class="number">4.</span><span class="terms-text"> Investment Exchanges </span></h4>
                               <p>
                                   When the Client is creating deposit requests, Client must make sure that there is no pending requests created by mistake, because this will prevent such Client from making withdrawal of their funds from the company, untill all the pending deposit requests are being paid completely.
                               </p>
                            </div>
                            <div class="single-terms">
                               <h4><span class="number">5.</span><span class="terms-text"> . Interests.</span></h4>
                               <p>
                               In the event of the Client’s default in timely payment of any amount which falls due under the terms of these Terms and Conditions, {{ env("SITE_NAME") }} reserves the right to place interest at a rate that is best okay for them, whether in the case of a sterling amount or any amount payable in another currency. Interest will accrue on a daily basis and will be due and payable to the Client.
                               </p>
                            </div>
                            <div class="single-terms">
                               <h4><span class="number">6.</span><span class="terms-text"> .  Confidentiality and Data Protection.</span></h4>
                               <p>
                               {{ env("SITE_NAME") }} may from time to time share with any of its Associated Companies, irrespective of location, any and all information supplied to {{ env("SITE_NAME") }} by the Client. Such information shall be kept confidential within the {{ env("SITE_NAME") }} Group of Companies. However, without prejudice, and in addition to any other right or obligation by virtue of which {{ env("SITE_NAME") }} or any company within the {{ env("SITE_NAME") }} Group of Companies may be entitled or bound by the laws of any state, territory, country or other jurisdiction, pursuant to any regulatory requirement, request, demand or summons in any territory, state, country or other jurisdiction, {{ env("SITE_NAME") }} shall be entitled, in its absolute unfettered discretion to disclose any information known to it, or to produce any documents, relating to the business or affairs of the Client. This right shall include, but shall not be limited to, requirements or requests from the FCA, the Office of the Superintendent of Financial Institutions (OSFI), the London Stock Exchange, the Panel on Take-overs & Mergers (POTAM), the Investment Dealers Association of Canada, the New York Stock Exchange, the International Securities Market Association, or any other regulatory body or Investment exchange in the UK or elsewhere
                               <br>
                               <br>
                               Such notice shall not affect any obligation entered into prior to the furnishing of such notice.
                               <br><br>
                               You hereby consent and confirm that you are duly authorised to consent on behalf of your officers and employees, and that you have obtained representations from your agents and delegates, to the extent applicable, that that their officers and employees have consented, to the processing and use of their personal data (as defined in the General Data Protection Regulation “GDPR”) provided under these Terms of Business or otherwise acquired which may include transfer and processing of such data outside of the European Economic Area (EEA) as stated in our Privacy Notice. Such personal data may include, without limitation, for example, names, addresses, descriptions and responsibilities, and shall only be used for the purpose of administering these Terms of Business and any Transactions executed in accordance with it. Full details as to how, what and where we control and process personal data can be found in our Privacy Notice which is available on {{ env("SITE_NAME") }}’s website at www.opco.com/mifid.
                               </p>
                            </div>
                            <div class="single-terms">
                               <h4><span class="number">7.</span><span class="terms-text"> . Amendments & Termination.</span></h4>
                               <p>
                               These Terms and Conditions may be amended or terminated at any time by {{ env("SITE_NAME") }} without notice. Amended Terms and Conditions shall take effect from the time such amended Terms and Conditions are posted on {{ env("SITE_NAME") }}’s website at: www.silvercapitaltrade.com/terms. You acknowledge that by continuing to deal with {{ env("SITE_NAME") }} you will be bound by such Terms and Conditions in effect at the time and that it is your responsibility to check the {{ env("SITE_NAME") }} website from time to time. Termination under this Clause shall not affect any outstanding orders or transactions or any legal rights or obligations, which may have arisen prior to the termination
                               </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12" id="privacy">
                        <div class="terms-right">
                            <div class="terms-single">
                                <h4>Invest Policy</h4>
                                <p>
                                The purpose of holding reserves is to protect the organisation and its charitable activities by providing time to adjust to changing financial circumstances. As a result of reviewing likely financial impact of key risks on reserves, a median target level of reserves of £7.5mm +/- £1.5mm is assessed as striking an appropriate balance between the need to spend income when received and maintaining operational integrity. In terms of monitoring reserve levels, it is planned to maintain fixed asset investments within the reserve target range, with the remainder held in cash to provide some liquidity in the reserve holdings. The fixed asset investments will be made up primarily of the investment portfolio held with UBS
                                </p>
                                <ul class="terms-list">
                                    <li>
                                    Meet ethical standard
                                    </li>
                                    <li>
                                    Investment levels are calibrated with target quantum of reserves
                                    </li>
                                    <li>
                                    Maintain reasonable levels of liquidity
                                    </li>
                                    <li>
                                    nvestment returns are maximised at acceptable levels of 
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End terms area -->
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
