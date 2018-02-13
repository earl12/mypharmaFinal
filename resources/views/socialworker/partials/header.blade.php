<nav class="navbar navbar-inverse navbar-fixed-top">
    <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block mr-20 pull-left" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
    <a href="{{ url('socialworker/dashboard') }}"><img src="{{asset('assets/logos/dashboard-logo.png')}}" width="120" alt="" /></a>
    <ul class="nav navbar-right top-nav pull-right">
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#site_navbar_search">
                <i class="fa fa-search top-nav-icon"></i>
            </a>
        </li>
        <li>
            <a id="open_right_sidebar" href="javascript:void(0);"><i class="fa fa-cog top-nav-icon"></i></a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-th top-nav-icon"></i></a>
            <ul class="dropdown-menu app-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                <li>
                    <ul class="app-icon-wrap">
                        <li>
                            <a href="#" class="connection-item">
                                <i class="pe-7s-umbrella txt-info"></i>
                                <span class="block">weather</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="connection-item">
                                <i class="pe-7s-mail-open-file txt-success"></i>
                                <span class="block">e-mail</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="connection-item">
                                <i class="pe-7s-date txt-primary"></i>
                                <span class="block">calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="connection-item">
                                <i class="pe-7s-map txt-danger"></i>
                                <span class="block">map</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="connection-item">
                                <i class="pe-7s-comment txt-warning"></i>
                                <span class="block">chat</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="connection-item">
                                <i class="pe-7s-notebook"></i>
                                <span class="block">contact</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="divider"></li>
                <li class="text-center"><a href="#">More</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell top-nav-icon"></i><span class="top-nav-icon-badge">5</span></a>
            <ul  class="dropdown-menu alert-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                <li>
                    <div class="streamline message-box message-nicescroll-bar">
                        <div class="sl-item">
                            <div class="sl-avatar avatar avatar-sm avatar-circle">
                                <img class="img-responsive img-circle" src="" alt="avatar"/>
                            </div>
                            <div class="sl-content">
                                <a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">Sandy Doe</a>
                                <span class="inline-block font-12  pull-right">12/10/16</span>
                                <div class="clearfix"></div>
                                <p>Neque porro quisquam est!</p>
                            </div>
                        </div>
                        <hr/>
                        <div class="sl-item">
                            <div class="icon">
                                <i class="fa fa-spotify"></i>
                            </div>
                            <div class="sl-content">
                                <a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">
                                    2 voice mails</a>
                                    <span class="inline-block font-12  pull-right">2pm</span>
                                    <div class="clearfix"></div>
                                    <p>Neque porro quisquam est</p>
                                </div>
                            </div>
                            <hr/>
                            <div class="sl-item">
                                <div class="icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                                <div class="sl-content">
                                    <a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">8 voice messanger</a>
                                    <span class="inline-block font-12 pull-right">1pm</span>
                                    <div class="clearfix"></div>
                                    <p>8 texts</p>
                                </div>
                            </div>
                            <hr/>
                            <div class="sl-item">
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="sl-content">
                                    <a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">2 new messages</a>
                                    <span class="inline-block font-12  pull-right">1pm</span>
                                    <div class="clearfix"></div>
                                    <p>ashjs@gmail.com</p>
                                </div>
                            </div>
                            <hr/>
                            <div class="sl-item">
                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                    <img class="img-responsive img-circle" src="/assets/dashboard/dist/img/user2.png" alt="avatar"/>
                                </div>
                                <div class="sl-content">
                                    <a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">Sandy Doe</a>
                                    <span class="inline-block font-12  pull-right">1pm</span>
                                    <div class="clearfix"></div>
                                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown">

                    <img src="{{asset("uploads/thumbs/default-avatar.jpg")}}" alt="user_auth" class="user-auth-img img-circle">
                    
                    <span class="user-online-status"></span></a>
                    <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                        <li>
                            <a href="{{ route('editProfile', auth()->user()->id) }}  "><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-fw fa-credit-card-alt"></i> my balance</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{url('logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-search-overlap" id="site_navbar_search">
                <form role="search">
                    <div class="form-group mb-0">
                        <div class="input-search">
                            <div class="input-group">   
                                <input type="text" id="overlay_search" name="overlay-search" class="form-control pl-30" placeholder="Search">
                                <span class="input-group-addon pr-30">
                                    <a  href="javascript:void(0)" class="close-input-overlay" data-target="#site_navbar_search" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="fa fa-times"></i></a>
                                </span> 
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </nav>