@if ($errors->any())

{{-- <div class="notification notification-danger"> --}}

	@foreach ($errors->all() as $error)

	<div class="notification notification-danger">
		<a class="close-notification no-smoothState"><i class="ion-android-close close-btn"></i></a>
		<p>{{ $error }} </p>
	</div>


	<script>
		$('#modal1').openModal();
	</script>
{{-- 

	<div id="modal1" class="modal">
		<div class="modal-content">
			<h4>Response</h4>
			<p>{{ $error }}</p>
		</div>
		<div class="modal-footer">
			<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
		</div>
	</div>

	--}}

	


	{{-- <a class="close-notification no-smoothState"><i class="ion-android-close"></i></a> --}}
	{{-- <p>{{ $error }} </p> --}}
	{{-- <span class="small">Server Response</span> --}}
	{{-- <li>{{ $error }}</li> --}}

	@endforeach

{{-- </div> --}}



@endif

