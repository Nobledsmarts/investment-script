@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">Reviews</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">Admin</li>
                                            <li class="breadcrumb-item active" aria-current="page">Reviews</li>
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

		            </section>
		<!-- /.content -->
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
                        <select class="form-control ww-100 bg-light text-dark" name="plan" id="plan_id">
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
                        <select class="form-control ww-100 bg-light text-dark" name="active">
                            <option value="1"> Yes </option>
                            <option value="0"> No </option>
                        </select>
                    </div>
                    <div class="form-group icon_form comments_form">
                        <textarea class="ww-100 bg-light" rows='6' name="review">Review</textarea>
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
        <script src="{{  asset('assets/js/admin.reviews.js') }}"></script>
    </body>
</html>
