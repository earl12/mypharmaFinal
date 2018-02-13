@extends('layouts.socialworker') 
@section('title','SocialWorker Home')
@section('contents')
@include('socialworker.partials.header')
@include('socialworker.partials.medicinelist')
@endsection
@section('modal')
@endsection
@section('footer')
@endsection
@section('js')
<script type="text/javascript" src="{{ URL::to('assets/dashboard/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/dist/js/jquery.slimscroll.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/vendors/bower_components/moment/min/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/dist/js/simpleweather-data.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/vendors/bower_components/Counter-Up/jquery.counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/dist/js/dropdown-bootstrap-extended.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/vendors/chart.js/Chart.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/vendors/bower_components/raphael/raphael.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/vendors/bower_components/morris.js/morris.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/dist/js/morris-data.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/dist/js/init.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/dist/js/dashboard-data.js') }}"></script>
<!-- <script type="text/javascript" src="{{ URL::to('assets/dashboard/vendors/bower_components/jquery.steps/build/jquery.steps.min.js') }}"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/dist/js/form-wizard-data.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/dist/js/starrr.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/dist/js/jquery.slimscroll.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/dashboard/dist/js/dropdown-bootstrap-extended.js') }}"></script> -->
@endsection
