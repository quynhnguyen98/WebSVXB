<aside>
    <div id="sidebar" class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu" id="nav-accordion">
        <p class="centered"><a href="profile.html"><img src="public/backend/img/logo.jpg" class="img-circle" width="80"></a></p>
        <h5 class="centered">Sam Soffes</h5>
        <li class="mt">
          <a class="{{'dashboard'==request()->path()?'active':''}}" href="{{URL::to('/dashboard')}}">
            <i class="fa fa-dashboard"></i>
            <span>Tổng Quan</span>
            </a>
        </li>
        <li class="sub-menu">
          <a class="{{'thanh-vien'==request()->path()?'active':''}}" href="{{URL::to('/thanh-vien')}}">
            <i class="fa fa-desktop"></i>
            <span>Quản Lý Thành Viên</span>
            </a>
        </li>
        <li class="sub-menu">
          <a href="#">
            <i class="fa fa-cogs"></i>
            <span>Quản Lý Hình Ảnh</span>
            </a>
         
        </li>
        <li class="sub-menu">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Sự Kiện</span>
            </a>
         
        </li>
        <li class="sub-menu">
          <a href="#">
            <i class="fa fa-tasks"></i>
            <span>Tin Tức</span>
            </a>
        
        </li>
        <li class="sub-menu">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Bình Luận</span>
            </a>
         
        </li>
        <li class="sub-menu">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Quản Lý Video</span>
            </a>
         
        </li>
        <li>
          <a href="inbox.html">
            <i class="fa fa-envelope"></i>
            <span>Mail </span>
            <span class="label label-theme pull-right mail-info">2</span>
            </a>
        </li>
        <li class="sub-menu">
          <a href="#">
            <i class=" fa fa-bar-chart-o"></i>
            <span>Charts</span>
            </a>
         
        </li>
        <li class="sub-menu">
          <a href="#">
            <i class="fa fa-comments-o"></i>
            <span>Chat Room</span>
            </a>
          <ul class="sub">
            <li><a href="lobby.html">Lobby</a></li>
            <li><a href="chat_room.html"> Chat Room</a></li>
          </ul>
        </li>
       
      </ul>
      <!-- sidebar menu end-->
    </div>
  </aside>