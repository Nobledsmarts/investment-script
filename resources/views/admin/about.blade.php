@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-light">About</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active">About</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            @include('admin.layouts.errors')
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Manage About Us Content</h4>
                                    <form method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <textarea class="textarea_editor form-control" name="about_us" rows="15" placeholder="Enter text ..." style="height:300px">{{ $site_about_us }}</textarea>
                                        </div>
                                        <div class="text-left">
                                            <button type="submit" class="btn btn-dark btn-block waves-effect waves-light m-r-10">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.layouts.footer')
            </div>
        </div>
        @include('admin.layouts.general-scripts')
        <script src="{{  asset('assets/js/custom.min.js') }}"></script>
        <script src="{{  asset('assets/js/fn.js') }}"></script>
        <script src="{{  asset('assets/js/main.js') }}"></script>
        <script src="{{  asset('assets/js/admin.pending-deposits.js') }}"></script>
        <script src="{{  asset('assets/js/lib/html5-editor/wysihtml5-0.3.0.js') }}"></script>
        <script src="{{  asset('assets/js/lib/html5-editor/bootstrap-wysihtml5.js') }}"></script>
        <script src="{{  asset('assets/js/lib/html5-editor/wysihtml5-init.js') }}"></script>
    </body>
</html>
