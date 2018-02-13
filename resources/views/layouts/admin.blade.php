<!DOCTYPE HTML>
<html lang="en" class="no-focus"> <!--<![endif]-->

<head>

  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

  <title>@yield('title')</title>
  
  <meta name="description" content="">

  <meta name="author" content="pixelcave">
  
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="robots" content="noindex, nofollow">
  
  <meta property="og:title" content="">
  
  <meta property="og:description" content="t">

  <meta property="og:type" content="">

  <meta property="og:url" content="">
  
  <meta property="og:image" content="">

  <!-- Icons -->


  <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
  <link rel="shortcut icon" href="{{ asset('assets/img/favicons/android-chrome-192x192.png') }} ">

  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/favicons/android-chrome-192x192') }} ">
  
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/android-chrome-192x192') }} ">
  <!-- END Icons -->

  <!-- Stylesheets -->
  <!-- Codebase framework -->
  {{ HTML::style('assets/css/codebase.min.css') }}

  {{ HTML::style('assets/css/themes/earth.min.css') }}
  
  {{ HTML::style('assets/js/plugins/datatables/dataTables.bootstrap4.min.css') }}    
  
  {{ HTML::style('css/fonts.css') }}
  

  {{ HTML::script('dist/js/sweetalert.js') }}

  {{ HTML::script('build/js/core-admin.js') }}


  <script>


    function provideInformation()
    { 
      swal({
        title: "Profile Information Needed",
        text: "Want us to redirect to that page?? ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.href = '{{ route('updateProfile',Auth::user()->id) }}';
        } else {
          swal("Go to your profile settings soon!");
        }
      });
    }

  </script>

  
</head>



<body>



  <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
    <!-- Side Overlay-->


    
    @include('admin.partials.sidebar')

    <!-- END Sidebar -->

    <!-- Header -->
    @include('admin.partials.header')

    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">

      <div class="content">


       @yield('content')


     </div>

   </main>
   <!-- END Main Container -->

   <!-- Footer -->
   @include('admin.partials.footer')
   <!-- END Footer -->
 </div>
 <!-- END Page Container -->

 <!-- Codebase Core JS -->


 {{-- <script src="{{ asset('dist/js/admin.js')  }}"></script> --}}






 <script>

  var urlCheckEmailDuplicate = '{{ route('email.getDuplicate') }}' ;

  var urlStoreUser = '{{ route('members.store') }}' ; 

  var token = '{{ Session::token() }}';

  var urlStoreMedicine = '{{ route('medicines.store') }}' ; 

  var urlDeleteUser = '{{ route('members.destroy') }}'

</script>


{{-- My Scripts --}}
{{ HTML::script('js/my_scripts/get.jquery.js') }}

{{ HTML::script('js/my_scripts/post.jquery.js') }}

{{ HTML::script('js/my_scripts/events.jquery.js') }}

{{ HTML::script('js/my_scripts/alerts.js') }}

{{ HTML::script('js/my_scripts/input_events.js') }}



@yield('js')

</body>
</html>