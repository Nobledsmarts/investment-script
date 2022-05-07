<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">	
				<li class="treeview">
				  <a href="#">
					<i data-feather="monitor"></i>
					<span>Dashboard</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					  @if($user->is_admin)
					<li><a href="/admin"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Admin Dashboard</a></li>
					  @endif
					<li><a href="/user"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Overview</a></li>
				  </ul>
				</li>
				<li class="header">MAIN</li>
				<li class="treeview">
				  <a href="#">
					<img src="{{ asset('images/svg-icon/sidebar-menu/cards.svg') }}" class="svg-icon" alt="">
					<span>Deposits</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="/user/deposit"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pending Deposits</a></li>
					<li><a href="/user/deposits"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Denied Deposits</a></li>
					<li><a href="/user/deposits"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Approved Deposits</a></li>

				  </ul>
				</li>

				
				<li class="treeview">
				  <a href="#">
					<img src="{{ asset('images/svg-icon/sidebar-menu/cards.svg') }}" class="svg-icon" alt="">
					<span>Withdrawals</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="/user/deposit"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pending Withdrawals</a></li>
					<li><a href="/user/deposits"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Denied Withdrawals</a></li>
					<li><a href="/user/deposits"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Approved Withdrawals</a></li>

				  </ul>
				</li>


				<li class="treeview">
				  <a href="#">
					<img src="{{ asset('images/svg-icon/sidebar-menu/cards.svg') }}" class="svg-icon" alt="">
					<span>Members</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="/user/deposit"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>All Members</a></li>
					<li><a href="/user/deposits"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Suspended Members</a></li>
					<li><a href="/user/deposits"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Admins</a></li>
					<li><a href="/user/deposits"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Moderators</a></li>

				  </ul>
				</li>

				<li>
				  <a href="/user/reinvest">
					<img src="{{ asset('images/svg-icon/sidebar-menu/transactions.svg') }}" class="svg-icon" alt="">
					<span>Wallets</span>
				  </a>
				</li>



				<li class="treeview">
				  <a href="#">
					<img src="{{ asset('images/svg-icon/sidebar-menu/cards.svg') }}" class="svg-icon" alt="">
					<span>Plans</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="/user/withdrawal"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Parent</a></li>
					<li><a href="/user/withdrawals"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Child</a></li>
				  </ul>
				</li>
				<li class="header">Actions</li>
				<li>
				  <a href="/user/reinvest">
					<img src="{{ asset('images/svg-icon/sidebar-menu/transactions.svg') }}" class="svg-icon" alt="">
					<span>Reviews</span>
				  </a>
				</li>
				<li class="treeview">
				  <a href="#">
					<img src="{{ asset('images/svg-icon/sidebar-menu/cards.svg') }}" class="svg-icon" alt="">
					<span>Confirm Funds</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="/user/withdrawal"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Credit</a></li>
					<li><a href="/user/withdrawals"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Debit</a></li>
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<img src="{{ asset('images/svg-icon/sidebar-menu/cards.svg') }}" class="svg-icon" alt="">
					<span>Confirm Current Invested</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="/user/withdrawal"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Credit</a></li>
					<li><a href="/user/withdrawals"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Debit</a></li>
				  </ul>
				</li>
				<li>
				  <a href="/user/reinvest">
					<img src="{{ asset('images/svg-icon/sidebar-menu/transactions.svg') }}" class="svg-icon" alt="">
					<span>Quick Withdrawal</span>
				  </a>
				</li>

				<li class="header">MANAGE</li>

                <li>
				  <a href="/user/referrals">
					<img src="{{ asset('images/svg-icon/sidebar-menu/members.svg') }}" class="svg-icon" alt="">
					<span>Wallet Balance</span>
				  </a>
				</li>
				<li>
				  <a href="/user/referrals">
					<img src="{{ asset('images/svg-icon/sidebar-menu/members.svg') }}" class="svg-icon" alt="">
					<span>Currently Invested</span>
				  </a>
				</li>
				<li>
				  <a href="/user/referrals">
					<img src="{{ asset('images/svg-icon/sidebar-menu/members.svg') }}" class="svg-icon" alt="">
					<span>Referral Bonus</span>
				  </a>
				</li>
				<li>
				  <a href="/user/referrals">
					<img src="{{ asset('images/svg-icon/sidebar-menu/members.svg') }}" class="svg-icon" alt="">
					<span>Deposit Interest</span>
				  </a>
				</li>
				<li>
				  <a href="/user/referrals">
					<img src="{{ asset('images/svg-icon/sidebar-menu/members.svg') }}" class="svg-icon" alt="">
					<span>Total Withdrawn</span>
				  </a>
				</li>
	
				<li class="header">PAGES</li>
                <li>
				  <a href="/user/profile">
					<img src="{{ asset('images/svg-icon/user.svg') }}" class="svg-icon" alt="">
					<span>FAQS</span>
				  </a>
				</li>
				<li>
				  <a href="/user/security">
					<img src="{{ asset('images/svg-icon/settings.svg') }}" class="svg-icon" alt="">
					<span>About</span>
				  </a>
				</li>
				<li>
				  <a href="/user/logout">
					<img src="{{ asset('images/svg-icon/authentication.svg') }}" class="svg-icon" alt="">
					<span>How It Works</span>
				  </a>
				</li>
				<li>
				  <a href="/user/logout">
					<img src="{{ asset('images/svg-icon/authentication.svg') }}" class="svg-icon" alt="">
					<span>Meet Our Traders</span>
				  </a>
				</li>
				<li>
				  <a href="/user/logout">
					<img src="{{ asset('images/svg-icon/authentication.svg') }}" class="svg-icon" alt="">
					<span>Privacy Policy</span>
				  </a>
				</li>
				<li>
				  <a href="/user/logout">
					<img src="{{ asset('images/svg-icon/authentication.svg') }}" class="svg-icon" alt="">
					<span>Terms & Condition</span>
				  </a>
				</li>
				<li>
				  <a href="/user/logout">
					<img src="{{ asset('images/svg-icon/authentication.svg') }}" class="svg-icon" alt="">
					<span>Logout</span>
				  </a>
				</li>
			  </ul>
			  
			  <div class="sidebar-widgets">				
				<div class="copyright text-start m-25">
					<p><strong class="d-block">{{ env('SITE_NAME') }}</strong> © {{ date('Y') }} All Rights Reserved</p>
				</div>
			  </div>
		  </div>
		</div>
    </section>
  </aside>