@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-light">Wallets</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active">Wallets</li>
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
                                        <button class="btn btn-rounded btn-primary add-wallet">Add Wallet</button>
                                    </div>
                                    
                                    <div class="table-responsive m-t-10">
                                        <table id="record-table" class="display record-table record-export nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>currency</th>
                                                    <th>symbol</th>
                                                    <th>active</th>
                                                    <th>address</th>
                                                    <th>has memo</th>
                                                    <th>memo token</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($wallets as $wallet)
                                                <tr class="background_white">
                                                    <td>
                                                        {{ $wallet['currency'] }}
                                                    </td>
                                                    <td>
                                                        {{ $wallet['currency_symbol'] }}
                                                    </td>
                                                    <td>
                                                        {{ $wallet['active'] ? 'True' : 'False' }}
                                                    </td>
                                                    <td>
                                                        {{ $wallet['currency_address'] }}
                                                    </td>
                                                    <td>
                                                        {{ $wallet['has_memo'] ? 'true' : 'false' }}
                                                    </td>
                                                    <td>
                                                        {{ $wallet['memo_token'] }}
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <button class="btn btn-outline-dark" type="button" data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a data-currency="{{ $wallet['currency'] }}" data-currency_symbol="{{ $wallet['currency_symbol'] }}" data-has_memo="{{ $wallet['has_memo'] }}" data-memo_token="{{ $wallet['memo_token'] }}" data-currency_address="{{ $wallet['currency_address'] }}"
                                                                data-action="edit" data-id="{{ $wallet['id'] }}" class="action-link dropdown-item" href="#">Edit</a>
                                                                <form action="" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $wallet['id'] }}">
                                                                    <input type="hidden" name="action" value="{{ $wallet['active'] ? 'deactivate' : 'activate' }}">
                                                                    <button type="submit" data-action="delete" data-id="{{ $wallet['id'] }}" class="dropdown-item" href="#">{{ $wallet['active'] ? 'Deactivate' : 'Activate' }}</button>
                                                                </form>
                                                                <form action="" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $wallet['id'] }}">
                                                                    <input type="hidden" name="action" value="delete">
                                                                    <button type="submit" data-action="delete" data-id="{{ $wallet['id'] }}" class="dropdown-item" href="#">Delete</button>
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
        <div class="modal" id="wallet-modal">
            <form class="page-form wallet-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input required type="text" class="form-control require bg-light text-dark" name="currency" placeholder="Enter Currency Name">
                </div>
                <div class="form-group">
                    <input required type="text" class="form-control require bg-light text-dark" name="currency_symbol" placeholder="Enter Currency Symbol">
                </div>
                <div class="form-group">
                    <input required type="text" class="form-control require bg-light text-dark" name="currency_address" placeholder="Enter Currency Address">
                </div>
                <label class="text-dark">Has Memo</label>
                <div class="form-group memo-wrapper">
                    <select name="has_memo" id="has-memo" class="form-control w-100 has-memo bg-light text-dark">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
                <div class="memo-cont d-none">
                    <div class="form-group">
                        <input type="text" class="form-control bg-light text-dark" name="memo_token" placeholder="Enter Currency Memo Token">
                    </div>
                </div>
                <div>
                <input type="hidden" class="form-control bg-light text-dark" name="id" value="">
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
        <script src="{{  asset('assets/js/admin.wallets.js') }}"></script>
    </body>
</html>
