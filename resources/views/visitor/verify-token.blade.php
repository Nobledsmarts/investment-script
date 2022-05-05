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
    url(15017-compressed.jpg) !important">
        <div class="fxt-header">
            <a href="../../index-2.html" style="width: 250px;" class="fxt-logo"><img src="../../site-images/site_logo/bg-rmv.png"
                    alt="Logo"></a>
        </div>
        <div class="fxt-content">
            <div class="fxt-form">


                


                
                
                <h2>Enter your email</h2>
                <p style="font-size: 15px !important;">This must be the email used to create the account whose password
                    you intend to recover. A verification token will be sent to the email.</p>

                
                <form method="POST" action="#">
                    <div class="form-group">
                        <div class="fxt-transformY-50 fxt-transition-delay-3">
                            <input type="email" class="form-control" name="reset_email" id="reset_email" placeholder="Email Address"
                                required="required">
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
                                                var reset_email = $('#reset_email').val();
                                                var url = "../inc/process_reset_ajax.html";
          
                                                if(!reset_email ){           
                                                    Swal.fire(
                                                        'Oh Sorry',
                                                        'Please type in your email address',
                                                        'error'
                                                    )
                                                    return false;
                                                }else{
                                                   $.ajax({
                                                   type: "POST",
                                                   url : url,
                                                   data: {reset_email : reset_email },
                                                   success: function(data, request, settings){
                                                   // alert(data);

                                                    if(data == 1 ){
                                                        Swal.fire(
                                                       'Success',
                                                       'Your request was successful. Please Check your email to continue.',
                                                       'success'
                                                        )
                                                    }else{
                                                        Swal.fire(
                                                       'Error',
                                                       data,
                                                       'error'
                                                        )
                                                    }
                                                   
                                                   $('#loaderIcon7').hide();
                                                   $('#reset_email').val("");
                                                              
                                                },
                                                beforeSend: function(data, request, settings){
                                                  $('#loaderIcon7').html('<img src="../ajaxloader/ajax-loader3.gif"/>');
                                                },
  
                                                });
            
                                            }
        
                                            });
                                            // end of ajax reset
                            });
                          </script>

</body>
</html>