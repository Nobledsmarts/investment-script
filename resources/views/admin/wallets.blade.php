@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">Wallets</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">Admin</li>
                                            <li class="breadcrumb-item active" aria-current="page">Wallets</li>
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
                                                            <button class="btn btn-outline-light" type="button" data-bs-toggle="dropdown">
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

		            </section>
		<!-- /.content -->
	            </div>
        </div>
        <div class="modal" id="wallet-modal">
            <form class="page-form wallet-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group memo-wrapper">
                    <label class="text-dark">Wallet</label>
                    <input type="text" class="form-control bg-light text-dark" name="currency" placeholder="Enter Wallet Name">
                </div>
                <div class="form-group memo-wrapper">
                    <label class="text-dark">Wallet Symbol</label>
                    <input type="text" class="form-control bg-light text-dark" name="currency_symbol" placeholder="Enter Wallet Symbol">
                </div>
                <div class="form-group">
                    <label class="text-dark">Enter Address</label>
                    <input type="text" class="form-control bg-light text-dark" name="currency_address" placeholder="Enter Wallet Address">
                </div>
                <select name="has_memo" class="d-none-">
                    <option value="1">True</option>
                    <option value="0">False</option>
                </select>
                <div class="memo-cont d-none-">
                    <div class="form-group">
                        <label class="text-dark">Enter Memo Token</label>
                        <input type="text" class="form-control bg-light text-dark" name="memo_token" placeholder="Enter Currency Memo Token">
                    </div>
                </div>
                <div>
                    <!-- <input type="hidden" name="id"> -->
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
  @include('admin.layouts.footer')
        @include('admin.layouts.general-scripts')
        <script src="{{  asset('assets/js/fn.js') }}"></script>
        <script src="{{  asset('assets/js/main.js') }}"></script>
        <script src="{{  asset('assets/js/admin.wallets.js') }}"></script>
       
    </body>
</html>
