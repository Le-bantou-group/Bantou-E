<header class="header-top" header-theme="light">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <div class="top-menu d-flex align-items-center">
                <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                <div class="header-search">
                    <div class="input-group">
                        <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                        <input type="text" class="form-control">
                        <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                    </div>
                </div>
                <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
            </div>
            <div class="top-menu d-flex align-items-center">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-bell"></i><span class="badge bg-danger">0</span></a>
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">
                        <h4 class="header">Notifications</h4>
                        <div class="notifications-wrap">
                            <a href="#" class="media">
                                <span class="d-flex">
                                    <i class="ik ik-check"></i> 
                                </span>
                                <span class="media-body">
                                    <span class="heading-font-family media-heading">Invitation accepted</span> 
                                    <span class="media-content">Your have been Invited ...</span>
                                </span>
                            </a>
                            <a href="#" class="media">
                                <span class="d-flex">
                               @if (Auth::user())
                                    <img src="{{ asset('storage/' . auth()->user()->avatar) }}" class="rounded-circle" alt="">
                                @else
                                    <i class="fa-solid fa-circle-user"></i>
                                @endif
                                </span>
                                <span class="media-body">
                                    <span class="heading-font-family media-heading">Steve Smith</span> 
                                    <span class="media-content">I slowly updated projects</span>
                                </span>
                            </a>
                            <a href="#" class="media">
                                <span class="d-flex">
                                    <i class="ik ik-calendar"></i> 
                                </span>
                                <span class="media-body">
                                    <span class="heading-font-family media-heading">To Do</span> 
                                    <span class="media-content">Meeting with Nathan on Friday 8 AM ...</span>
                                </span>
                            </a>
                        </div>
                        <div class="footer"><a href="javascript:void(0);">See all activity</a></div>
                    </div>
                </div>
                <button type="button" onclick="window.location.href = '{{ route('chat') }}'"class="nav-link ml-10 right-sidebar-toggle"><i class="ik ik-message-square"></i><span class="badge bg-success">0</span></button>
                
               
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="{{ asset('storage/' . auth()->user()->avatar) }}" alt=""></a>
                    
                </div>

            </div>
        </div>
    </div>
</header>