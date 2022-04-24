<script src="{{ asset('assets/js/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/modal/jquery.modal.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/datatables.js') }}"></script>
<script src="{{ asset('assets/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.select-2').select2();
    });
</script>

<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+61 417 560 326", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
 </script>
// <!-- /GetButton.io widget -->