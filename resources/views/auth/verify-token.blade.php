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
    <section class="fxt-template-animation fxt-template-layout6" style="background-image:
    linear-gradient(45deg, #012c6aa1 100%, #012c6ae6 100%),
    url({{ asset('auth/15017-compressed.jpg') }}) !important">
        <div class="fxt-header">
            <a href="/" style="width: 250px;" class="fxt-logo"><img src="{{ asset('visitor/site-images/new/Hnet.com-image.png') }}"
                    alt="Logo"></a>
        </div>
        <div class="fxt-content">
            <div class="fxt-form">


                


                
                
                <h2>Enter OTP</h2>
                <p style="font-size: 15px !important;">
                    This must be the OTP sent to your registered email address
                </p>

                
                <form method="POST" action="#">
                    <div class="form-group">
                        <div class="fxt-transformY-50 fxt-transition-delay-3">
                            <input type="text" class="form-control" name="token" id="token" placeholder="Token"
                                required="required">
                            <input type="hidden" name="email" value="{{ session('email') }}" id="email">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="fxt-transformY-50 fxt-transition-delay-5">
                            <div class="fxt-content-between">
                                <button type="submit" id="reset_submit" name="reset" class="fxt-btn-fill kiksksk992mmw">Verify</button>
                                <span id="loaderIcon7"></span>
                            </div>
                        </div>
                    </div>

                </form>

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
    
        <script src="{{ asset('sweetalert2/dist/sweetalert2.min.js') }}"></script>

    <script>
                            $(document).ready(function(event){
                              // for ajax reset

                              

                                $("#reset_submit").on('click', function(event){
                                        event.preventDefault();
                                    var token = $('#token').val();
                                    var email = $('#email').val();
                                    var url = "/verify-token";

                                    if(!token ){           
                                        Swal.fire(
                                            'Oh Sorry',
                                            'Please type in your OTP',
                                            'error'
                                        )
                                        return false;
                                    }else{
                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });
                                        $.ajax({
                                        type: "POST",
                                        url : url,
                                        data: {token : token, email },
                                        success: function(data, request, settings){
                                            console.log(data)
                                            Swal.fire(
                                            'Success',
                                            'Verification was successful',
                                            'success'
                                            )
                                        
                                        $('#loaderIcon7').hide();
                                        $('#reset_email').val("");
                                                    
                                    },
                                    error: function(err) {
                                        console.log(err.responseJSON.error.message[0])
                                        Swal.fire(
                                            'Error',
                                            err.responseJSON.error.message[0],
                                            'error'
                                            )
                                    },
                                    beforeSend: function(data, request, settings){
                                        $('#loaderIcon7').html(`<img src="{{ asset('auth/ajaxloader/ajax-loader3.gif') }}"/>`);
                                    },

                                    });

                                }

                                });
                                            // end of ajax reset
                            });
                          </script>

</body>
</html>