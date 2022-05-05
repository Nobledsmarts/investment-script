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


                


                
                
                <h2>Change Your Password</h2>
                <p style="font-size: 15px !important;">
                    You will need this password next time you want to login into your account.
                </p>

                
                <form method="POST" action="#">
                    <div class="form-group">
                        <div class="fxt-transformY-50 fxt-transition-delay-3">
                            <input type="password" class="form-control" name="password" id="password" placeholder="password"
                                required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="fxt-transformY-50 fxt-transition-delay-3">
                            <input type="password" class="form-control" name="repassword" id="repassword" placeholder="confirm password"
                                required="required">
                            <input type="hidden" name="email" value="{{ session('email') }}" id="email">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="fxt-transformY-50 fxt-transition-delay-5">
                            <div class="fxt-content-between">
                                <button type="submit" id="reset_submit" name="reset" class="fxt-btn-fill kiksksk992mmw">Continue</button>
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
                                    var password = $('#password').val();
                                    var repassword = $('#repassword').val();
                                    var email = $('#email').val();
                                    var url = "/change-pass";

                                    if(password != repassword ) {
                                        Swal.fire(
                                            'Oh Sorry',
                                            'Password does not match password confirmation',
                                            'error'
                                        )
                                        return false;
                                    }

                                    if(!password || !repassword ){           
                                        Swal.fire(
                                            'Oh Sorry',
                                            'All field must be filled',
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
                                        data: {email, password, repassword },
                                        success: function(data, request, settings){
                                        Swal.fire(
                                            'Success',
                                            'Your request was successful. Password has been changed.',
                                            'success'
                                            )
                                        
                                        $('#loaderIcon7').hide();
                                        $('#reset_email').val("");
                                                    
                                    },
                                    error: function(err) {
                                        console.log(err)
                                        if(err.responseJSON.hasOwnProperty('errors')) {
                                            let key = Object.keys(err.responseJSON.errors);
                                            Swal.fire(
                                            'Error',
                                            err.responseJSON.errors[key[0]][0],
                                            'error'
                                            )
                                        } else {
                                            Swal.fire(
                                            'Error',
                                            err.responseJSON.error.message[0],
                                            'error'
                                            )
                                        }
                                    },
                                    beforeSend: function(data, request, settings){
                                        $('#loaderIcon7').html('<img src="{{ asset(`auth/ajaxloader/ajax-loader3.gif`) }}"/>');
                                    },

                                    });

                                }

                                });
                                            // end of ajax reset
                            });
                          </script>

</body>
</html>