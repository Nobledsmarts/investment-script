@include('auth.layouts.head')
    <style>
    .kiksksk992mmw {
        background: #01123c !important;
        color: #fff !important;
    }
    </style>


<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <video
        style="position: absolute; z-index: 0; width: 100%; height: 100vh; top: 0px; left: 0px; overflow: hidden; opacity: 1;         user-select: none; display:block !important; object-fit: cover !important"
        autoplay muted loop playsinlines src="{{ asset('visitor/site-images/bg-chc.mp4') }}"
        poster="{{ asset('visitor/h4-slider-1-background-img.jpg') }}"></video>

    <section class="fxt-template-animation fxt-template-layout24" style="position: relative;">
        <!-- data-bg-image="site-images/h4-slider-1-background-img.jpg" -->





        <div class="overlay"
            style="position: absolute; z-index: 0; width: 100%; height: 100%; top: 0px; left: 0px; overflow: hidden; opacity: 1; background: #00000063;">
        </div>

        <!-- linear-gradient(45deg, #528BC9 0%, #54ceff 100%);  -->

        <!-- Video Area Start Here -->
        <div class="container" style="width: auto; max-width: 93% !important">

            <div class="row align-items-center justify-content-center"
                style="background: linear-gradient(45deg, #012c6ae6 100%, #012c6ae6 100%); padding-top: 30px; padding-bottom: 30px">
                <div class="col-lg-3">
                    <div class="fxt-header">
                        <a href="#" class="fxt-logo"><img style="height: 100px;
    object-fit: contain;" src="{{ asset('visitor/site-images/new/Hnet.com-image.png') }}" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="fxt-content">
                        <h2 style="font-size: 27px; margin-bottom: 25px; text-transform: uppercase">Log into your
                            account</h2>
                        

                        

                        <div class="fxt-form">
                            <form method="POST" action="#">
                                @csrf
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input type="text" id="general_username" class="form-control" name="login"
                                            placeholder="Username or email" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-2">
                                        <input id="general_password" type="password" class="form-control" name="password"
                                            placeholder="Password" required="required">
                                        <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-3">
                                        <div class="fxt-checkbox-area">
                                            <div class="checkbox">
                                                <input id="checkbox1" type="checkbox">
                                                <label for="checkbox1">Keep me logged in</label>
                                            </div>
                                            <a href="/reset-password" class="switcher-text">Forgot Password</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                                        <button type="submit" name="login" id="general_login" class="fxt-btn-fill kiksksk992mmw">Login <span id="loaderIcon5"></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="fxt-footer">
                            <div class="fxt-transformY-50 fxt-transition-delay-9">
                                <p>Don't have an account?<a class="" href="create-new-account.html"
                                        class="switcher-text2">Register</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Popper js -->
    <script src="{{ asset('auth/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
    <!-- Imagesloaded js -->
    <script src="{{ asset('auth/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Validator js -->
    <script src="{{ asset('auth/js/validator.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('auth/js/main.js') }}"></script>
    
       
    <script src="{{ asset('auth/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Validator js -->

    <script src="{{ asset('auth/js/ui-alerts.min.js') }}"></script>
    <script src="{{ asset('sweetalert2/dist/sweetalert2.min.js') }}"></script>

    <script>
    $(document).ready(function(){

    
         // for ajax login

        $("#general_login").on('click', function(event){
            event.preventDefault();
            var general_username = $('#general_username').val();
            var general_password = $('#general_password').val();
            var url = "/login";

            if(!general_username || !general_password ){           
                Swal.fire(
                    'Oh Sorry',
                    'Fields cannot be blank',
                    'error'
                )
            }else{
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                type: "POST",
                url : url,
                data: {login : general_username, password : general_password },
                success: function(data, request, settings){
                    // window.location="/userddddddddddddddddd";
                    console.log(data)

                $('#loaderIcon5').hide();
                $('#general_username').val("");
                $('#general_password').val("");
                            
            },
            error: function(err) {
                Swal.fire(
                    'Oh Sorry',
                    err.responseJSON.error.message[0],
                    'error'
                )
                console.log(err.responseJSON.error)
            },
            beforeSend: function(data, request, settings){
                $('#loaderIcon5').html(`<img src="{{ asset('auth/ajaxloader/ajax-loader3.gif') }}"/>`);
            },

            });

        }

        });
                                            // end of ajax login
    });
</script>

</body>
</html>