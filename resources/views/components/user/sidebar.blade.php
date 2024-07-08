<div class="dashboard-sidebar">
    <div class="user-image">
        <img src="https://via.placeholder.com/300x300" alt="#">
        <h3>Steve Aldridge
            <span><a href="javascript:void(0)">@username</a></span>
        </h3>
    </div>
    <div class="dashboard-menu">
        <ul>
            <li><a class="{{ (request()->routeis('users.dashboard')) ? 'active' : '' }}" href="dashboard.html"><i class="lni lni-dashboard"></i> Dashboard</a></li>
            <li><a  href="profile-settings.html"><i class="lni lni-pencil-alt"></i>
                Modifica Profilo</a></li>
                <li><a href="my-items.html"><i class="lni lni-bolt-alt"></i> My Ads</a></li>
                <li><a href="favourite-items.html"><i class="lni lni-heart"></i> Favourite ads</a></li>
                <li><a href="post-item.html"><i class="lni lni-circle-plus"></i> Post An Ad</a></li>
                <li><a href="bookmarked-items.html"><i class="lni lni-bookmark"></i> Bookmarked</a></li>
                <li><a href="messages.html"><i class="lni lni-envelope"></i> Messages</a></li>
                <li><a href="delete-account.html"><i class="lni lni-trash"></i> Close account</a></li>
                <li><a href="invoice.html"><i class="lni lni-printer"></i> Invoice</a></li>
            </ul>
            <div class="button">
                <a class="btn" href="javascript:void(0)">Logout</a>
            </div>
        </div>
    </div>
    <!-- Start Dashboard Sidebar -->
</div>