@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-light">Reviews</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active">Reviews</li>
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
                                        <button class="btn btn-rounded btn-primary add-review">Add Review</button>
                                    </div>
                                    <div class="table-responsive m-t-10">
                                        <table id="record-table" class="display record-table record-export nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Plan</th>
                                                    <th>Occupation</th>
                                                    <th>Review</th>
                                                    <th>Active</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($reviews as $review)
                                                <tr>
                                                    <td>
                                                        {{ $review['user'] }}
                                                    </td>
                                                     <td>
                                                        {{ $review->child_plan->name }}
                                                    </td>
                                                    <td>
                                                        {{ $review['occupation'] }}
                                                    </td>
                                                     <td>
                                                        {{ substr($review['review'], 0, 30) }}
                                                    </td>
                                                    <td>
                                                        {{ $review['active'] }}
                                                    </td>
                                                    
                                                    <td class="text-right">
                                                        <div class="dropdown">
                                                            <button class="btn btn-outline-dark" type="button" data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a data-action="edit" data-user="{{ $review['user'] }}" data-review="{{ $review['review'] }}" data-active="{{ $review['active'] }}" data-occupation="{{ $review['occupation'] }}" data-plan="{{ $review->child_plan->id }}" data-id="{{ $review['id'] }}" class="action-link dropdown-item" href="#">Edit</a>
                                                                <form action="" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $review['id'] }}">
                                                                    <input type="hidden" name="action" value="delete">
                                                                    <button type="submit" data-action="delete" data-id="{{ $review['id'] }}" class="dropdown-item" href="#">Delete</button>
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
        <div class="modal fade" id="review-modal">
            <h4 class="modal-title">
                <span class="review-action">Add New</span> Review
            </h4>
            <div class="modal-body">
                <form class="page-form review-form" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group icon_form comments_form">
                        <input required type="text" class="form-control require bg-light text-dark" name="user" placeholder="User">
                    </div>
                    <div class="form-group icon_form comments_form">
                        <label class="text-dark"> Plan</label>
                        <select class="form-control w-100 bg-light text-dark" name="plan" id="plan_id">
                            @foreach ($plans as $plan)
                                <option value="{{ $plan['id'] }}"> {{ $plan['name'] }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group icon_form comments_form">
                        <input required type="text" class="form-control require bg-light text-dark" name="occupation" placeholder="Enter users occupation">
                    </div>
                    <div class="form-group icon_form comments_form">
                        <label class="text-dark"> Is Active </label>
                        <select class="form-control w-100 bg-light text-dark" name="active">
                            <option value="1"> Yes </option>
                            <option value="0"> No </option>
                        </select>
                    </div>
                    <div class="form-group icon_form comments_form">
                        <textarea class="w-100 bg-light" rows='6' name="review">Review</textarea>
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
        <script src="{{  asset('assets/js/admin.reviews.js') }}"></script>
    </body>
</html>
