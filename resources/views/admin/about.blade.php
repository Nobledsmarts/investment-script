@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                     <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">About</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">Admin</li>
                                            <li class="breadcrumb-item active" aria-current="page">About</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Main content -->
                    <section class="content">			
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
                                            <button type="submit" class="btn btn-primary btn-block ww-100 waves-effect waves-light m-r-10">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

		            </section>
		<!-- /.content -->
	            </div>
        </div>
  @include('admin.layouts.footer')
        @include('admin.layouts.general-scripts')
        <script src="{{  asset('assets/js/fn.js') }}"></script>
        <script src="{{  asset('assets/js/main.js') }}"></script>
        <script src="{{  asset('assets/js/lib/html5-editor/wysihtml5-0.3.0.js') }}"></script>
        <script src="{{  asset('assets/js/lib/html5-editor/bootstrap-wysihtml5.js') }}"></script>
        <script src="{{  asset('assets/js/lib/html5-editor/wysihtml5-init.js') }}"></script>
    </body>
</html>
