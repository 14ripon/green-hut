 <!-- Header Area -->
 <header class="main_header">
  <div class="logo">
    <a href="{{ route('dashboard') }}">
      <img class="img-fluid" src="{{ asset('admin/assets/dist/img/logo.png') }}" alt="">
    </a>
  </div>
  <ul class="custom-navbar">
    <li>
      <form class="d-none d-md-block" action="#">
        <input type="text" placeholder="Search">
        <button type="submit" data-toggle="tooltip" title="Search"><i class="fas fa-search"></i></button>
      </form>
    </li>
    <li>
      <a href="#" class="dropdown-icon" data-toggle="dropdown"><i class="fas fa-bell"></i>
        <span class="badge fadeAnim">2</span>
      </a>
      <div class="dropdown-menu dropdown_box notification_box">
        <div class="dropdown_box-header">
          <h4 class="inline-block float-left"><span>2</span> new notifications</h4>
          <a href="#" class="float-right">Clear All</a>
        </div>
        <div class="dropdown_box-body">
          <ul>
            <li>
              <a href="#">
                <div class="icon">
                  <span><i class="fas fa-comment-dots"></i></span>
                </div>
                <div class="text">
                    <h5>3 new comments</h5>
                    <span>40 seconds ago</span>
                  </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="icon">
                  <span><i class="far fa-envelope"></i></span>
                </div>
                <div class="text">
                    <h5>You have received 1 email</h5>
                    <span>5 minutes ago</span>
                  </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="icon">
                  <span><i class="fas fa-dollar-sign"></i></span>
                </div>
                <div class="text">
                    <h5>You have transferred $50</h5>
                    <span>8 minutes ago</span>
                  </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="icon">
                  <span><i class="fas fa-thumbs-up"></i></span>
                </div>
                <div class="text">
                    <h5>Someone likes your post</h5>
                    <span>13 minutes ago</span>
                  </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="icon">
                  <span><i class="fas fa-ban"></i></span>
                </div>
                <div class="text">
                    <h5>Someone banned your post</h5>
                    <span>20 minutes ago</span>
                  </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="icon">
                  <span><i class="far fa-trash-alt"></i></span>
                </div>
                <div class="text">
                    <h5>Someone deleted your post</h5>
                    <span>36 minutes ago</span>
                  </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="dropdown_box-footer">
          <a href="#" class="footer-btn">see all notification <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
    </div>
    </li>

    <li>
      <a href="#" class="dropdown-icon" data-toggle="dropdown"><i class="far fa-envelope"></i>
        @if($globalUnreadCount > 0 )
        <span class="badge fadeAnim">{{ $globalUnreadCount }}</span>
        @endif

      </a>
        <div class="dropdown-menu dropdown_box message-box">
          <div class="dropdown_box-header">
            <h4 class="d-block text-center">
              <span>{{ $globalUnreadCount }}</span> new messages</h4>
          </div>
          <div class="dropdown_box-body">
            <ul>


            @forelse ($latestContacts as $latestContact)
            <li>
                <a href="{{ route('mails.show', $latestContact->id) }}">
                  <div class="icon">
                    <img class="img img-fluid" src="{{ asset('admin/assets/dist/img/avatar.png') }}" alt="">
                  </div>
                  <div class="text">
                      <h5>{{ $latestContact->full_name }} - <span class="ti-timer"></span> <span>{{ \Carbon\Carbon::parse($latestContact->created_at)->format('g:i A') }} {{ \Carbon\Carbon::parse($latestContact->created_at)->format('Y-M-d') }}</span></h5>
                      <span>{{ $latestContact->email }}</span>

                    </div>
                    <span class="active-status text-danger float-right mt-4"><i class="fas fa-circle"></i></span>
                </a>
              </li>
              @empty
            <div class="dropdown-item text-center">
                No messages
            </div>
            @endforelse


            </ul>
          </div>
          <div class="dropdown_box-footer">
            <a href="{{ route('mails.index') }}" class="footer-btn">see all messages <i class="fas fa-long-arrow-alt-right"></i></a>
          </div>
      </div>
    </li>
    <li><a href="#" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
        <div class="dropdown-menu dropdown_box admin-box">
            <ul>
              <li><a href="#">Superadmin</a></li>
              <li><a href="#">Admin</a></li>
              <li><a href="#">HR</a></li>
              <li><a href="#">Manager</a></li>
              <li><a href="#">Editor</a></li>
              <li><a href="#">Subscriber</a></li>
              <li><a href="#">User</a></li>
            </ul>
      </div>
    </li>
    <li><a href="#" data-toggle="dropdown"><i class="far fa-user"></i></a>
        <div class="dropdown-menu dropdown_box settings-box">
            <ul>
              <li><a href="{{ route('profile') }}"><span class="pr-2"><i class="far fa-user"></i></span> User Profile</a></li>
              <li><a href="#"><span class="pr-2"><i class="fas fa-cog"></i></span> Settings</a></li>
              <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <span class="pr-2"><i class="ti-key"></i></span> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                    @csrf
                </form>
                </li>
              
            </ul>
      </div>
    </li>
    <li><a class="d-block d-md-none pt-0 mr-2 sidebar-toggler" data-toggle="dropdown" href="#"><i class="ti-menu-alt"></i></a></li>

  </ul>
</header><!-- /Header Area-->