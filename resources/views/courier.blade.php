  <!DOCTYPE html>
  <html lang="en-US">

  <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
  <head>
    <title>Mypharma</title>
    <meta content="IE=edge" http-equiv="x-ua-compatible">
    <meta content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">


    <!-- Icons -->
    <link href="{{ asset('dist/css/ionicons.min.css') }}" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('dist/css/courier.css') }}">

    <link href=" {{ asset('css/fonts.css') }} " rel='stylesheet' type='text/css'>

    {{-- <link href=" {{ asset('manifest.json') }} " rel='manifest' > --}}

    <link rel="shortcut icon" href="{{ asset('assets/img/favicons/android-chrome-192x192.png') }} ">

    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-74264063-1', 'auto');
      ga('send', 'pageview');
    </script>


  </head>

  <body>

    <div id="main"> <!-- Main Container -->

      <!-- Sidebar -->
      <ul id="slide-out" class="side-nav primary-color collapsible">
        <li>

          <div class="sidenav-header">

            <!-- Srearch bar -->
            <nav class="searchnav">
              <div class="nav-wrapper">
                <form>
                  <div class="input-field">
                    <input id="search" type="search" required>
                    <label for="search"><i class="ion-android-search"></i></label>
                    <i class="ion-android-close"></i>
                  </div>
                </form>
              </div>
            </nav>

            <!-- Social Bar -->
            <div class="nav-social">
              <i class="ion-social-facebook"></i>
              <i class="ion-social-twitter"></i>
              <i class="ion-social-tumblr"></i>
            </div>

            <!-- Avatar -->
            <div class="nav-avatar">

              {{-- <avatar src="{{ $user->file_name }} "></avatar> --}}

              <img class="circle avatar" src="{{ asset('assets/img/avatars/default.jpg') }}" alt="">
              <div class="avatar-body">
                <h3>{{ Auth::user()->name }}</h3>
                <p>Courier</p>
              </div>
            </div>
          </div>
        </li>

        <!-- Menu -->
        @include('partials.mobile.courier_links')
        
      </ul>
      <!-- End of Sidebars -->

      <!-- Toolbar -->
      <div id="toolbar" class="indigo darken-1">
        <div class="title">Mypharma</div>
        <div class="open-right" id="open-right" data-activates="slide-out">
          <i class="ion-android-menu"></i>
        </div>
      </div>
      <!-- End of Toolbar -->


      <router-view></router-view>


    </div>


    <script src="{{ mix('dist/js/app.js') }}"></script>
    <script src="{{ asset('dist/js/courier.js') }}"></script>
    <script src="{{ asset('dist/js/functions.js') }}"></script>


  </body>

  </html>