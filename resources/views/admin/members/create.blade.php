@extends('layouts.admin')


@section('title', 'Create new Member')

@section('content')

<div class="content">
	
	<h2 class="content-heading">Create New Member Below</h2>
	<div class="col-md-9">
		<!-- Material (floating) Register -->
		<div class="block block-themed">
			<div class="block-header bg-gd-sea">
				<h3 class="block-title logo-1">Fill up the forms</h3>

				<div class="block-options">
					<button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
						<i class="si si-refresh"></i>
					</button>
					<button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
				</div>
			</div>
			<div class="block-content">
				<form action="{{ route('members.store') }}" method="POST" id="userForm">
					{{ csrf_field() }} 
					@include('partials.member_form')

                    <div class="form-group row">
                        <div class="col-md-9">
                            <button type="submit" class="btn btn-lg btn-alt-primary">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- END Material (floating) Register -->
    </div>
</div>



@endsection
@section('js')

<script>
	var timeout = null;

	var textInput = document.getElementById('emailInput');


    // Listen for keystroke events
    textInput.onkeyup = function (e) {

        // Clear the timeout if it has already been set.
        // This will prevent the previous task from executing
        // if it has been less than <MILLISECONDS>
        clearTimeout(timeout);
        // Make a new timeout set to go off in 800ms
        timeout = setTimeout(function () {

        	console.log('Input Value:', textInput.value);

        	if (textInput.value === '') {
        		$('.availability').text('');
        	}
        	else {
        		getEmailAvailability(textInput.value); 
        	}
        },1500);

    } 


    
    function getEmailAvailability(value){
    	$.get('{{ route('email.getDuplicate') }}', { email : value }).done(function(data){
    		if(data >= 1) {
    			console.log(data);
                // swal (alertTitle ,  alertBody,  "error" );
                // swal('Warning','Email is taken',"error");

                $('.availability').text('Email is taken').addClass('text-danger');

            }
            else { 
            	$('.availability').text('Email is available').addClass('text-success').removeClass('text-danger');
            }
        });
    }
</script>
@endsection