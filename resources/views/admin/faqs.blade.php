@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">Members</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">Admin</li>
                                            <li class="breadcrumb-item active" aria-current="page">Members</li>
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
                            <div class="box">
                                <div class="box-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                        <button class="btn btn-rounded btn-primary add-faq">Add FaQ</button>
                                    </div>
                                    <div class="table-responsive m-t-10">
                                        <table id="record-table" class="display record-table record-export nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Priority</th>
                                                    <th>Question</th>
                                                    <th>Answer</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($faqs as $faq)
                                                <tr class="background_white">
                                                    <td>
                                                        <div class="media cs-media">

                                                            <div class="media-body">
                                                                <h5>{{ $faq['priority'] }}</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                        <td>
                                                        <div class="media cs-media">

                                                            <div class="media-body">
                                                                <h5>{{ $faq['question'] }}</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                        <td>
                                                        <div class="media cs-media">

                                                            <div class="media-body">
                                                                <h5>{{ substr($faq['answer'], 0, 50) }}...</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <button class="btn btn-outline-light" type="button" data-bs-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a data-action="edit" data-priority="{{ $faq['priority'] }}" data-answer="{{ $faq['answer'] }}" data-question="{{ $faq['question'] }}" data-id="{{ $faq['id'] }}" class="action-link dropdown-item" href="#">Edit</a>
                                                                <form action="" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $faq['id'] }}">
                                                                    <input type="hidden" name="action" value="delete">
                                                                    <button type="submit" data-action="delete" data-id="{{ $faq['id'] }}" class="dropdown-item" href="#">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

		            </section>
		<!-- /.content -->
	            </div>
        </div>
        <div class="modal fade" id="faq-modal">
            <h4 class="modal-title text-dark"><span class="faq-action">Add New</span> FaQ </h4>
            <div class="modal-body">
                <form class="page-form faq-form" action="" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group icon_form comments_form">
                        <input required type="number" class="form-control require bg-light text-dark" name="priority" placeholder="Enter Priority">
                    </div>
                    <div class="form-group icon_form comments_form">
                        <input required type="text" class="form-control require bg-light text-dark" name="question" placeholder="Enter Question">
                    </div>
                    <div class="form-group icon_form comments_form">
                        <textarea class="bg-light text-dark ww-100" rows='10' name="answer">Answer...</textarea>
                    </div>
                    <div>
                        <input type="hidden" name="id">
                        <button type="submit" class="btn btn-primary rounded-btn ww-100">
                            <span class="form-loading d-none px-5">
                                <i class="fa fa-sync fa-spin"></i>
                            </span>
                            <span class='submit-text'>
                                Submit
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
  @include('admin.layouts.footer')
        @include('admin.layouts.general-scripts')
        <script src="{{  asset('assets/js/fn.js') }}"></script>
        <script src="{{  asset('assets/js/main.js') }}"></script>
        <script src="{{  asset('assets/js/admin.faqs.js') }}"></script>
    </body>
</html>
