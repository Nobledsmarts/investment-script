@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-light">Wallets</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
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
                                        <button class="btn btn-rounded btn-primary add-wallet">Create Wallet</button>
                                    </div>
                                    <div class="table-responsive m-t-10">
                                        <table id="record-table" class="display record-table record-export nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>wallet</th>
                                                    <th>symbol</th>
                                                    <th>wallet address</th>
                                                    <th>site wallet address</th>
                                                    <th>memo token</th>
                                                    <th>actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($user_wallets as $user_wallet)
                                                <tr>
                                                    <td>
                                                        {{ $user_wallet->admin_wallet->currency }}
                                                    </td>
                                                    <td>
                                                        {{ $user_wallet->admin_wallet->currency_symbol }}
                                                    </td>
                                                    <td>
                                                        {{ $user_wallet['currency_address'] }}
                                                    </td>
                                                    <td>
                                                        {{ $user_wallet->admin_wallet->currency_address }}
                                                    </td>
                                                    <td>
                                                        {{ $user_wallet['memo_token'] }}
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <button class="btn btn-outline-dark" type="button" data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a data-main_wallet-id="{{ $user_wallet->admin_wallet->id }}" data-currency_address="{{ $user_wallet['currency_address'] }}"
                                                                    data-action="edit" data-has_memo="{{ $user_wallet->admin_wallet->has_memo }}" data-id="{{ $user_wallet['id'] }}" class="action-link dropdown-item"  class="action-link dropdown-item" href="#">Edit</a>
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
                @include('user.layouts.footer')
            </div>
        </div>
        <div class="modal" id="wallet-modal">
            <form class="page-form wallet-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group memo-wrapper">
                    <label class="text-dark">Wallet</label>
                    <select name="main_wallet_id" class="w-100 has-memo form-control bg-light text-dark " id="has-memo">
                        @foreach ($main_wallets as $main_wallet)
                            <option data-id="{{ $main_wallet['id'] }}" data-currency="{{ $main_wallet['currency'] }}" data-symbol="{{ $main_wallet['currency_symbol'] }}" data-has_memo="{{ $main_wallet['has_memo'] }}" value="{{ $main_wallet['id'] }}">{{ $main_wallet['currency'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-dark">Enter Address</label>
                    <input type="text" class="form-control bg-light text-dark" name="currency_address" placeholder="Enter Wallet Address">
                </div>
                <select name="has_memo" class="d-none">
                    <option value="1">True</option>
                    <option value="0">False</option>
                </select>
                <div class="memo-cont d-none">
                    <div class="form-group">
                        <label class="text-dark">Enter Memo Token</label>
                        <input type="text" class="form-control bg-light text-dark" name="memo_token" placeholder="Enter Currency Memo Token">
                    </div>
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
        @include('user.layouts.general-scripts')
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
        <script src="{{  asset('assets/js/user.wallets.js') }}"></script>
    </body>
</html>
