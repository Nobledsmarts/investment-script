@include('visitor.layouts.header')
<style>
    .site-canvas{
        background: #f7f7f7;
    }
</style>
<div class="container-fluid top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h1 class="ltr text-left">
                    Investment Plans
                </h1>
                <ol class="breadcrumb">
                    <li class="home">
                        <a href="/" class="home">{{ env('SITE_NAME') }}</a>
                    </li>
                    <li class="post post-page current-item">Investment Plans</li>
                </ol>
            </div>

            <div class="col-xs-6 col-sm-3 hidden-xs hidden-sm hidden-l-sm">
                <div class="option-nav">
                    <a href="/support">
                        <i class="contact"></i><span>Contact Us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container top80">
    <div class="row">
        <div class="col-12" style="padding : 0px 15px">
            <h2>{{ env('SITE_NAME') }} Investment Plans</h2>
            <div class="row">
                @foreach($plans as $plan)
                <div class="col-md-4" align="center">
                    <div class="landing-feature-item" style="border : none; color: #070713;background: #ffff;/*border: 2px solid #070713;*/; padding:0px">
                        <div style="border-radius : 5px 5px 0px 0px;background:#18214d; color:aliceblue; display: block;width: 100%;left: 0;right: 0; padding:10px">
                            <h3 style="padding:5px 18px;border-radius : 50px; color:aliceblue; display:inline-flex;text-transform:capitalize"> {{ $plan->name }} Plan </h3>
                        </div>
                        <div style='border-bottom: 1px solid #d6d6e4; padding : 15px 0px; '>
                            <h2 style="color : #008000; margin-bottom : 0px;">${{ $plan->minimum_amount }}</h2>
                            Minimum Amount 
                        </div>
                        <div style='border-bottom: 1px solid #d6d6e4; padding : 15px 0px; '>
                            <h2 style="color : #008000; margin-bottom : 0px;">${{ $plan->maximum_amount }}</h2>
                            Maximum Amount
                        </div>
                        <div style='border-bottom: 1px solid #d6d6e4; padding : 15px 0px; '>
                            <h3 style="color : #008000;">{{ $plan->interest_rate }}%</h3>
                            Returns Daily For {{ $plan->duration }} days
                        </div>
                        <div style='border-bottom: 1px solid #d6d6e4; padding : 15px 0px; '>
                            <h3 style="color : #008000;">{{ $plan->referral_bonus }}%</h3>
                            Referral Bonus
                        </div>
                        <p style="padding : 10px 0px 20px; margin-bottom:15px;">
                            <a href="/register" class="btn btn-success" style="background:#18214d; padding:10px 58px !important; border-radius:50px; border-color:#18214d !important;box-shadow:#00000033 0px 2px 14px -6px">
                                Invest
                            </a>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container top80"></div>
{{-- @include('visitor.layouts.general-scripts') --}}
@include('visitor.layouts.footer')