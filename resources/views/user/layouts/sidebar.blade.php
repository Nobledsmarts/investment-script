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
					<li><a href="/user"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Overview</a></li>
				  </ul>
				</li>
				<li class="header">MAIN</li>
				<li class="treeview">
				  <a href="#">
					<img src="{{ asset('images/svg-icon/sidebar-menu/cards.svg') }}" class="svg-icon" alt="">
					<span>Deposit</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="/user/deposit"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Make Deposit</a></li>
					<li><a href="/user/deposits"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Deposit History</a></li>
				  </ul>
				</li>

				<li class="treeview">
				  <a href="#">
					<img src="{{ asset('images/svg-icon/sidebar-menu/cards.svg') }}" class="svg-icon" alt="">
					<span>Withdrawal</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="/user/withdrawal"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Request Withdrawal</a></li>
					<li><a href="/user/withdrawals"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Withdrawal History</a></li>
				  </ul>
				</li>
				
				<li>
				  <a href="/user/reinvest">
					<img src="{{ asset('images/svg-icon/sidebar-menu/transactions.svg') }}" class="svg-icon" alt="">
					<span>Reinvest</span>
				  </a>
				</li>
                <li>
				  <a href="/user/referrals">
					<img src="{{ asset('images/svg-icon/sidebar-menu/members.svg') }}" class="svg-icon" alt="">
					<span>Referrals</span>
				  </a>
				</li>
				
				<li class="header">OTHERS</li>
                <li>
				  <a href="/user/profile">
					<img src="{{ asset('images/svg-icon/user.svg') }}" class="svg-icon" alt="">
					<span>Profile</span>
				  </a>
				</li>
				<li>
				  <a href="/user/security">
					<img src="{{ asset('images/svg-icon/settings.svg') }}" class="svg-icon" alt="">
					<span>Security</span>
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