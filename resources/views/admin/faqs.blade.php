@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-light">FaQs</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active">FaQs</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            @include('admin.layouts.errors')
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
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
                                                            <button class="btn btn-outline-dark" type="button" data-toggle="dropdown">
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
                    
                </div>
                @include('admin.layouts.footer')
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
                        <textarea class="bg-light text-dark w-100" rows='10' name="answer">Answer...</textarea>
                    </div>
                    <div>
                        <input type="hidden" name="id">
                        <button type="submit" class="btn btn-dark rounded-btn w-100">
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
        @include('admin.layouts.general-scripts')
        <script src="www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js') }}"></script>
        <script src="{{  asset('assets/js/custom.min.js') }}"></script>
        <script src="{{  asset('assets/js/fn.js') }}"></script>
        <script src="{{  asset('assets/js/main.js') }}"></script>
        <script src="{{  asset('assets/js/admin.faqs.js') }}"></script>
    </body>
</html>
