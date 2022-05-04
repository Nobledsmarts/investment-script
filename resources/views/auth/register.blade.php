<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Skylife Investment Funds | Create New Account</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.html">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('auth/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('auth/css/fontawesome-all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('auth/font/flaticon.css') }}">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <!-- jquery-->
    <script src="{{ asset('auth/js/jquery-3.5.0.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('sweetalert2/dist/sweetalert2.min.css') }}">
</head>
    <!-- select css -->
    <link href="{{ asset('visitor/cdn.jsdelivr.net/npm/select2%404.1.0-beta.1/dist/css/select2.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('visitor/cdn.jsdelivr.net/npm/select2%404.1.0-beta.1/dist/js/select2.min.js') }}"></script>



    <style>
    .select2-selection.select2-selection--single,
    input {
        border: unset !important;
        border: 1px solid #e7e7e7 !important;
        border-radius: unset !important;
    }

    .select2-selection.select2-selection--single {
        padding-bottom: 30px;
        padding-top: 5px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #9c9393 !important
    }

    input[type=text],
    input[type=email],
    input[type=number],
    input[type=tel],
    input[type=password] {
        padding-left: 10px !important;
        padding-right: 10px !important;
    }

    i.toggle-password {
        margin-right: 10px;
    }

    @media(min-width:992px) {
        .yeyyue {
            height: 100vh;
        }

        .ytrwiklwk {
            overflow-x: scroll;
        }

        .fxt-content {
            margin-top: 400px;
        }

        .ytyuytyikmnjwm {
            display: flex;
            justify-content: center;
        }
    }

    .fxt-template-layout19 .fxt-bg-img:before {
        content: unset !important;
    }

    .select2.select2-container.select2-container--default {
        max-width: 100% !important;
    }

    .select2.select2-container.select2-container--default.select2-container--above {
        width: 100% !important;
    }

    .select2.select2-container.select2-container--default {
        width: 100% !important;
    }

    .ytyuytyikmnjwm {
        display: flex;
        justify-content: center;
    }

    @media(max-width: 400px) {
        .yeyyue {
            /* background-position-x: -400px !important; */
        }
    }
    </style>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <style>
    @media(max-width: 700px) {
        .hshsgsg {
            display: none !important;
        }
    }

    .yeyyue {
        background-position-x: left !important;
    }

    .yeyyue.ytrwiklwk {
        background-color: rgba(1, 18, 60, .9) !important;
    }

    h2,
    span,
    p {
        color: #fff !important;
    }

    .kiksksk992mmw {
        background: #c49a0e !important;
        color: #fff !important;
    }

    input#htmlInput {
        color: #c49a0e !important;
    }

    #pass-length-error,
    #pass-error {
        color: #bb1010 !important;
    }

    .select2-results__option span {
        color: #01123c !important;
    }

    /*@media(max-width: 480px){*/
    /*    .yeyyue.yiihknkhk{*/
    /*        background-image: url('./reg-img.jpg') !important;*/
    /*        background-repeat: no-repeat;*/
    /*        background-position: center center;*/
    /*        background-size: cover;*/
    /*    }*/
    /*}*/
    </style>

    <section class="fxt-template-animation fxt-template-layout19">
        <div class="container-fluid" style="background-image: url({{ asset('visitor/h4-slider-1-background-img.jpg') }});">
            <div class="row">
                <div class="col-md-3 col-12"></div>
                <div class="col-md-6 col-12 fxt-bg-color yeyyue ytrwiklwk">
                    <div class="fxt-content">
                        <div class="fxt-form">
                            <a href="../../index-2.html" class="fxt-logo" >
                                <center>
                                    <img style="max-width: 100%; width: 250px"
                                src="{{ asset('visitor/site-images/site_logo/logo1/bg-rmv1.png') }}" alt="Logo">
                                </center>
                            </a>
                                <br>
                            <h2 style="text-transform: uppercase; text-align: center; margin-bottom: 20px">Create an
                                account</h2>
                            <p style="text-align: center; font-size: 15px">Account creation has never been easier and
                                faster! <br> Simply supply the information required in the form below to create a new
                                account.</p> <br>

                            <form id="uploadForm" method="POST" action='#'>
                                @csrf
                                <div class="form-group fxt-transformY-50 fxt-transition-delay-1">
                                    <input type="text" value="" ;
                                        class="form-control" name="firstname" id="firstname" placeholder="First Name"
                                        required="required">

                                </div>
                                <div class="form-group fxt-transformY-50 fxt-transition-delay-1">
                                    <input type="text" value="" ;
                                        class="form-control" name="middlename" id="middlename" placeholder="Middle Name"
                                        required="required">

                                </div>
                                <div class="form-group fxt-transformY-50 fxt-transition-delay-1">
                                    <input type="text" value="" ;
                                        class="form-control" name="lastname" id="lastname" placeholder="Last Name"
                                        required="required">

                                </div>
                                <div class="form-group fxt-transformY-50 fxt-transition-delay-1">
                                    <input type="text" value="" ;
                                        class="form-control" name="username" id="username" placeholder="Username"
                                        required="required">

                                </div>
                                <div class="form-group fxt-transformY-50 fxt-transition-delay-2">
                                    <input value="" ; type="email"
                                        class="form-control" id="email" name="email" placeholder="Your Email" required="required">

                                </div>

                                <div class="form-group fxt-transformY-50 fxt-transition-delay-2">
                                    <input value="" ; type="text"
                                        class="form-control" id="uid" name="uid" placeholder="Your Referral ID">

                                </div>


                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                                        <input minlength="8" id="password" type="password" class="form-control" name="password"
                                            placeholder="Enter Password" required="required">
                                        <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                    </div>

                                    <span id="pass-length-error"
                                        style="display: none; color: #bb1010; font-size: 15px;">Password cannot be less
                                        than 8 characters</span>
                                </div>

                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                                        <input id="con_password" type="password" name="con_password" minlength="8" class="form-control" name="con_password"
                                            placeholder="Repeat Password" required="required">
                                        <i toggle="#con_password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                    </div>

                                    <span id="pass-error" style="display: none; color: #bb1010; font-size: 15px;">The
                                        two passwords do not match. Check the passwords.</span>
                                </div>

                                <input type="hidden" name="referrer" id="referrer" value=''>

                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-5">
                                        <div class="text-center">
                                            <button id='form-submit' type="submit" type="submit"
                                                class="fxt-btn-fill btn-block kiksksk992mmw">
                                                Create Account
                                                <span id="loaderIcon6"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <input type="reset" name="reset" id="reset" style="display: none;">

                                                                
                                                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-12"></div>
            </div>
        </div>
    </section>





    <script>
    function FormHandler() {
        this.password = document.getElementById("password");
        this.rpassword = document.getElementById("con_password");
        this.formSubmit = document.getElementById("form-submit");
        this.passError = document.getElementById("pass-error");
        this.passLengthError = document.getElementById("pass-length-error");
        this.passwordValue = this.password.value;
        this.rpasswordValue = null;
        this.formOkay = true;

        this.checkForm = (e, c) => {


            if (e !== true) {

                if (!formHandlerObject.formOkay) {
                    if (c) {
                        formHandlerObject.formSubmit.setAttribute('disabled', true);
                        formHandlerObject.formSubmit.setAttribute('title',
                            'Passwords do not match. Check the two passwords you supplied and try again.');

                        this.passError.style.display = 'inline-block';
                    }
                } else {
                    this.passError.style.display = 'none';
                    formHandlerObject.formSubmit.removeAttribute('disabled');
                    formHandlerObject.formSubmit.removeAttribute('title');
                }

            }



        }



        this.password.addEventListener('blur', e => {
            this.passwordValue = this.password.value;
            this.formOkay = (this.passwordValue === this.rpasswordValue) ? true : false;

            if (this.rpasswordValue) {
                this.checkForm(null, true);
            }



            console.log(this.password.value.length);

            if (this.password.value.length < 8) {
                this.passLengthError.style.display = 'inline-block';
                formHandlerObject.formSubmit.setAttribute('disabled', true);
            } else {
                formHandlerObject.formSubmit.removeAttribute('disabled');
                this.passLengthError.style.display = 'none';
            }


        });


        this.password.addEventListener('keyup', e => {

            console.log(this.password.value.length);

            if (this.password.value.length > 7) {
                formHandlerObject.formSubmit.removeAttribute('disabled');
                this.passLengthError.style.display = 'none';
            }

        });



        this.rpassword.addEventListener('blur', e => {
            this.rpasswordValue = this.rpassword.value;
            this.formOkay = (this.passwordValue === this.rpasswordValue) ? true : false;
            this.checkForm(null, true);
        });


    }



    const formHandlerObject = new FormHandler();

    console.log(formHandlerObject);
    </script>






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
    
    


    <script src="{{ asset('visitor/cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js') }}"></script>

    <script src="{{ asset('auth/js/ui-alerts.min.js') }}"></script>
    <script src="{{ asset('sweetalert2/dist/sweetalert2.min.js') }}"></script>

    <script>

        $(document).ready(function(){
            // codes starts here

                // for ajax registration

                $("#uploadForm").on('submit', function(event){
                        event.preventDefault();
                    var firstname = $('#firstname').val();
                    var lastname = $('#lastname').val();
                    var middlename = $('#middlename').val();
                    var uid = $('#uid').val()
                    var username = $('#username').val();
                    var email = $('#email').val();
                    var password = $('#password').val();
                    var con_password = $('#con_password').val();
                    var url = "/register";

                    if(!firstname || !lastname || !middlename || !username || !email || !con_password || !password){           
                        Swal.fire(
                            'Oh Sorry',
                            'Fields cannot be blank',
                            'error'
                        )
                    }else{
                        $.ajax({
                        type: "POST",
                        url : url,
                        data:  new FormData(this),
                        contentType: false,
                        processData:false,
                        success: function(data, request, settings){
                        
                            Swal.fire({
                                title: '<h5 style="color:#25ae88;font-family:Roboto Condensed">Registration Successful <img style=max-width:18px src=success.png /></h5>',
                                html: '<small style="font-family:Chivo; font-size:11px">Please wait a moment, sending you verification email in 5 seconds...</small>',
                                timer: 5000,
                                allowOutsideClick : false,
                                allowEscapeKey: false,
                                onBeforeOpen: () => {

                                Swal.showLoading()
                                timerInterval = setInterval(() => {
                                    // Swal.getContent().querySelector('strong')
                                    //   .textContent = Swal.getTimerLeft()
                                }, 1000)

                                function sayHi() {
                                    const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000
                                    })

                                    Toast.fire({
                                    type: 'success',
                                    title: '<span style="font-family:Chivo; color:#25ae88">Sent Successfully</span>'
                                    })
                                    window.location="/login";
                                }

                                setTimeout(sayHi, 5000);


                                },
                                onClose: () => {
                                clearInterval(timerInterval)
                                }
                            }).then((result) => {
                                if (
                                /* Read more about handling dismissals below */
                                result.dismiss === Swal.DismissReason.timer
                                ) {
                                console.log('I was closed by the timer')
                                }
                            })

                        $('#loaderIcon6').hide();
                        // $('#username').val("");
                        // $('#password').val("");
                        // $('#con_password').val("");
                        $('#reset').trigger("click");
                        $('#previewImage').prop("src", "vippng.com-empty-circle-png-4161690.png");
                    },
                    error: function(err) {
                        console.log(err)
                    },
                    beforeSend: function(data, request, settings){
                        $('#loaderIcon6').html('<img src="{{ asset(`auth/ajaxloader/ajax-loader3.gif`) }}"/>');
                    },

                    });

                }

                });
                // end of ajax login

            // codes ends here
        });
    </script>


</body>
</html>