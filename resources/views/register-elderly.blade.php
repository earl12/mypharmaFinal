@extends('layouts.app')

@section('title','Create User')


@section('styles')

<link rel="stylesheet" href="{{ asset('dist/assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }} ">

@endsection


@section('content')

<div class="container formBody">

	@include('administrator.front.register-form')

</div>
@endsection

@section('js')


<script>
	
	var storeData = '{{ url('') }}';

</script>


<script src="{{ asset('js/store_info.js') }}"></script>

<script src="http://api.mygeoposition.com/api/geopicker/api.js" type="text/javascript"></script>
<script>
	function lookupGeoData() {            
		myGeoPositionGeoPicker({
			startAddress     : 'Cebu City',
			returnFieldMap   : {
				'geoposition1a' : '<LAT>',
				'geoposition1b' : '<LNG>',
                                     'geoposition1c' : '<CITY>',   /* ...or <COUNTRY>, <STATE>, <DISTRICT>,
                                     <CITY>, <SUBURB>, <ZIP>, <STREET>, <STREETNUMBER> */
                                     'geoposition1d' : '<ADDRESS>'
                                 }
                             });
	}
</script>


@stop

