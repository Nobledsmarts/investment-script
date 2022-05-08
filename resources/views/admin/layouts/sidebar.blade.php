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
					<li><a href="/user"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Dashboard</a></li>
					<li><a href="/admin"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Overview</a></li>
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
					<li><a href="/admin/deposits/pending"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pending Deposits</a></li>
					<li><a href="/admin/deposits/denied"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Denied Deposits</a></li>
					<li><a href="/admin/deposits/approved"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Approved Deposits</a></li>

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
					<li><a href="/admin/withdrawals/pending"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pending Withdrawals</a></li>
					<li><a href="/admin/withdrawals/denied"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Denied Withdrawals</a></li>
					<li><a href="/admin/withdrawals/approved"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Approved Withdrawals</a></li>

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
					<li><a href="/admin/members"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>All Members</a></li>
					<li><a href="/admin/members/suspended"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Suspended Members</a></li>
					<li><a href="/admin/members/admins"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Admins</a></li>
					<li><a href="/admin/members/moderators"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Moderators</a></li>

				  </ul>
				</li>

				<li>
				  <a href="/admin/wallets">
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
					<li><a href="/admin/plans/parent"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Parent</a></li>
					<li><a href="/admin/plans/child"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Child</a></li>
				  </ul>
				</li>
				<li class="header">Actions</li>
				<li>
				  <a href="/admin/reviews">
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
					<li><a href="/admin/fund/confirm-credit"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Credit</a></li>
					<li><a href="/admin/fund/confirm-debit"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Debit</a></li>
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
					<li><a href="/admin/fund/ci/confirm-credit"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Credit</a></li>
					<li><a href="/admin/fund/ci/confirm-debit"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Debit</a></li>
				  </ul>
				</li>
				<li>
				  <a href="/admin/quick-withdrawal">
					<img src="{{ asset('images/svg-icon/sidebar-menu/transactions.svg') }}" class="svg-icon" alt="">
					<span>Quick Withdrawal</span>
				  </a>
				</li>

				<li class="header">MANAGE</li>

                <li>
				  <a href="/admin/manage/wallet-balance">
					<img src="{{ asset('images/svg-icon/sidebar-menu/members.svg') }}" class="svg-icon" alt="">
					<span>Wallet Balance</span>
				  </a>
				</li>
				<li>
				  <a href="/admin/manage/current-invested">
					<img src="{{ asset('images/svg-icon/sidebar-menu/members.svg') }}" class="svg-icon" alt="">
					<span>Currently Invested</span>
				  </a>
				</li>
				<li>
				  <a href="/admin/manage/referral-bonus">
					<img src="{{ asset('images/svg-icon/sidebar-menu/members.svg') }}" class="svg-icon" alt="">
					<span>Referral Bonus</span>
				  </a>
				</li>
				<li>
				  <a href="/admin/manage/deposit-interest">
					<img src="{{ asset('images/svg-icon/sidebar-menu/members.svg') }}" class="svg-icon" alt="">
					<span>Deposit Interest</span>
				  </a>
				</li>
				<li>
				  <a href="/admin/manage/total-withdrawn">
					<img src="{{ asset('images/svg-icon/sidebar-menu/members.svg') }}" class="svg-icon" alt="">
					<span>Total Withdrawn</span>
				  </a>
				</li>
	
				<li class="header">PAGES</li>
                <li>
				  <a href="/admin/pages/faqs">
					<img src="{{ asset('images/svg-icon/user.svg') }}" class="svg-icon" alt="">
					<span>FAQS</span>
				  </a>
				</li>
				<li>
				  <a href="/admin/pages/about">
					<img src="{{ asset('images/svg-icon/settings.svg') }}" class="svg-icon" alt="">
					<span>About</span>
				  </a>
				</li>
				<li>
				  <a href="/admin/pages/how-it-works">
					<img src="{{ asset('images/svg-icon/authentication.svg') }}" class="svg-icon" alt="">
					<span>How It Works</span>
				  </a>
				</li>
				<li>
				  <a href="/admin/pages/meet-our-traders">
					<img src="{{ asset('images/svg-icon/authentication.svg') }}" class="svg-icon" alt="">
					<span>Meet Our Traders</span>
				  </a>
				</li>
				<li>
				  <a href="/admin/pages/privacy-policy">
					<img src="{{ asset('images/svg-icon/authentication.svg') }}" class="svg-icon" alt="">
					<span>Privacy Policy</span>
				  </a>
				</li>
				<li>
				  <a href="/admin/pages/terms">
					<img src="{{ asset('images/svg-icon/authentication.svg') }}" class="svg-icon" alt="">
					<span>Terms & Condition</span>
				  </a>
				</li>
				<li>
				  <a href="/admin/logout">
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