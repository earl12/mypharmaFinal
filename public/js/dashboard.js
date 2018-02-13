$('#registerBarangayBtn').on('click',function(){
    console.log('E');
});

$('#addMedicineForm').on('submit', function (e) {
    e.preventDefault() ;
        //serializing the data..
        var data = $(this).serialize(); 

        console.log(data);
        
        // storeUser(data,urlForStoringUser);

    });


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


    $('.modal').on('hidden.bs.modal', function(){
        $(this).find('form')[0].reset();

        $('.availability').text('');

    });

