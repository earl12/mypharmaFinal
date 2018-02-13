@extends('layouts.admin')

@section('title', 'Welcome Admin')

@section('content')


{{-- If User has an information Show the Modal for Displaying --}}
{{-- if logged on user currently has an information show the modal where to update teh form  --}}

@if(is_null($users_information))

<script>
  provideInformation();
</script>



@else


<script>

  console.log('0');


</script>

@endif 
  


@include('admin.content.dashboard-widgets')

@include('admin.modals.add_medicine_modal')

@include('admin.modals.register_barangay_modal')

@include('admin.modals.add_user_modal')










@endsection

@section('js')

{{ HTML::script('assets/js/plugins/chartjs/Chart.bundle.min.js') }}
{{ HTML::script('assets/js/pages/be_pages_dashboard.js') }}

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



      $('#registerUser').on('click', function (e) {
        e.preventDefault() ;

        //serializing the data..
        var data = $('#createUserForm').serialize(); 

        var role_id = document.getElementById('role_id');

        var barangay_id = document.getElementById('barangay_id');

        if ( role_id.value == 2) { 
          if (barangay_id.value == '') {
            swal({
              title: "Alert",
              text: "Please choose a barangay to assign to a social worker",
              type: "error",
              confirmButtonClass: 'btn btn-danger',
              confirmButtonText: 'Danger!'
            });
          }
          else {

            console.log(data);

            storeUser(data, urlStoreUser); 
          }
        }
        else {
          storeUser(data, urlStoreUser); 

        }

      });





      $('.modal').on('hidden.bs.modal', function(){

        $(this).find('form')[0].reset();

        $('.availability').text('');

      });



      $('select[name="role_id"]').on('change', function () {
        var addBarangayDiv = $('div#form-group-barangay');
        if ($(this).val() == 3)
        {
          addBarangayDiv.hide();
          addBarangayDiv.find('select').val('');
        } else {
          addBarangayDiv.show();

        }
      });

    </script>

    <script src="http://api.mygeoposition.com/api/geopicker/api.js" type="text/javascript"></script>


    <script type="text/javascript">
      function lookupGeoData() {            
        myGeoPositionGeoPicker({
          startAddress     : 'Cebu City Hall',
          returnFieldMap   : {
           'geoposition1a' : '<LAT>',
           'geoposition1b' : '<LNG>',
           'geoposition1c' : '<CITY>',
           'full_address' : '<ADDRESS>'
         }
       });
      }
    </script>





    @endsection   