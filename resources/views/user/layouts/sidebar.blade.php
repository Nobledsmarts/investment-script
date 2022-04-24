<div class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebar-menu">
                <li class="nav-devider"></li>
                @if ($user['is_admin'])
                <li class="nav-label">ADMIN</li>
                <li>
                    <a href="/admin" aria-expanded="false">
                        <i class="fa fa-tachometer"></i><span class="hide-menu">Admin Dashboard</span>
                    </a>
                </li>
                @endif
                <li class="nav-label">MAIN</li>
                <li>
                    <a href="/user" aria-expanded="false">
                        <i class="fa fa-home"></i><span class="hide-menu">Home</span>
                    </a> 
                </li>
                <li>
                    <a href="/user/profile" aria-expanded="false">
                        <i class="fa fa-user"></i><span class="hide-menu">Profile</span>
                    </a> 
                </li>
                <li>
                    <a href="/user/wallets" aria-expanded="false">
                        <i class="fa fa-users"></i><span class="hide-menu">Wallets</span>
                    </a> 
                </li>
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="fa fa-tachometer"></i><span class="hide-menu">Finance </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/user/deposit">Make Deposit</a></li>
                        <li><a href="/user/withdrawal">Request Withdrawal</a></li>
                        <li><a href="/user/reinvest">Make Reinvestment</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="fa fa-tachometer"></i><span class="hide-menu">Deposits</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/user/deposits/active">Active Deposits</a></li>
                        <li><a href="/user/deposits/inactive">Inactive Deposits</a></li>
                        <li><a href="/user/deposits">Deposit History</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="fa fa-tachometer"></i><span class="hide-menu">Reports</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/user/transactions">All Transactions</a></li>
                        <li><a href="/user/deposits">Deposit History</a></li>
                        <li><a href="/user/reinvestments">Reinvestment History</a></li>
                        <li><a href="/user/withdrawals">Withdrawal History</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/user/referrals" aria-expanded="false">
                        <i class="fa fa-users"></i><span class="hide-menu">Referrals</span>
                    </a> 
                </li>
                @if ($user['permission'] == '2')
                <li class="nav-label">MANAGE</li>
                <li>
                    <a href="/user/manage/quick-withdrawal" aria-expanded="false">
                        <i class="fa fa-users"></i><span class="hide-menu">Quick Withdrawal</span>
                    </a> 
                </li>
                <li>
                    <a href="/user/manage/current-invested" aria-expanded="false">
                        <i class="fa fa-users"></i><span class="hide-menu">Currently Invested</span>
                    </a> 
                </li>
                <li>
                    <a href="/user/manage/referral-bonus" aria-expanded="false">
                        <i class="fa fa-users"></i><span class="hide-menu">Referral Bonus</span>
                    </a> 
                </li>
                <li>
                    <a href="/user/manage/wallet-balance" aria-expanded="false">
                        <i class="fa fa-users"></i><span class="hide-menu">Wallet Balance</span>
                    </a> 
                </li>
                @endif
                <li class="nav-label">OTHERS</li>
                <li>
                    <a href="/user/security" aria-expanded="false">
                        <i class="fa fa-cog"></i><span class="hide-menu">Security</span>
                    </a> 
                </li>
                <li>
                    <a href="/user/logout" aria-expanded="false">
                        <i class="fa fa-sign-out"></i><span class="hide-menu">Log out</span>
                    </a> 
                </li>
            </ul>
        </nav>
    </div>
</div>