@extends('layouts.app')

@section('title','Geo position')



@section('contents')

<input type="text" name="geoposition1a" id="geoposition1a" size="10">
<input type="text" name="geoposition1b" id="geoposition1b" size="10">
<input type="text" name="geoposition1c" id="geoposition1c" size="10">
<input type="text" name="geoposition1d" id="geoposition1d" size="70">
<button type="button" onclick="lookupGeoData();">GeoPicker</button>

@endsection

@section('js')

<script src="http://api.mygeoposition.com/api/geopicker/api.js" type="text/javascript"></script>
<script src="{{ asset('js/geoposition.js') }} "></script>


@stop

