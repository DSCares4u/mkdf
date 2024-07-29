    <div class="sidebar shadow-sm">
        <div class="sidebar-top">
            <div class="sidebar-profile-img">
                <img src="/assets/user-img.jpg" alt="">
                <input type="file" class="profile-img-file">
            </div>
            <h5>{{$profile_details->first_name}}</h5>
        </div>
        <ul class="sidebar-list">
            {{-- <li><a href="user-dashboard.html"><i class="far fa-gauge-high"></i> Dashboard</a></li> --}}
            <li><a class="active" href="{{ url('customer/profile') }}"><i class="far fa-user"></i> My Profile</a></li>
            <li><a href="{{ url('customer/invoice-list') }}"><i class="fa-regular fa-file-lines"></i> My Invoice <span class="badge badge-danger"></span></a></li>
            <li><a href="javascript:void(0)"><i class="fa-solid fa-circle-info"></i> Support Tickets <span class="badge badge-danger"></span></a></li>
            <li><a href="{{ url('customer/logout') }}"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
        </ul>
    </div>
