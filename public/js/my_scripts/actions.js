$('#deleteUser').on('click', function (evt) {
    var id = $(this).data('id');
    console.log(id);
    showConfirmAlert(id) ; 
});

$('.editSocialWorker').on('click', function (evt) {
    console.log(evt);

    $('.availability').text('');
    var id = $(this).data('id');
    var name = $(this).data('fname');
    var email = $(this).data('email');
    var password = $(this).data('pw');
    var status = $(this).data('status');
    $('.full-name').val(name);
    $('.emailEdit').val(email);
    $('.pWord').val(password);
    $('#basic_modal').modal("show");
    $('#userName').text(name);

    $('.modal-footer').on('click', '.submitButton', function (a) {
        // console.log(id);
        a.preventDefault();
        var name = $('.full-name').val();
        var email = $('.emailEdit').val();
        var pWord = $('.pWord').val();
        var role_id = $('select[name=role_id]').val();
        var barangay_id = $('select[name=barangay_id]').val();
        var status = $('select[name=status]').val();
        updateUser(id, name, email, pWord, role_id, barangay_id, status, urlForUpdate); //sends all user data to ajax post request 
    });

});




$('.deleteBtn').on('click', function () {
    var user_id = $(this).data('id');
    swal({
        title: 'Are you sure?',
        text: "You cannot undo this action",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#66cc99',
        cancelButtonColor: '#ff6666',
        confirmButtonText: 'Yes, I want to delete it !',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger'
    }).then(function (e) {
        console.log(e);
        deleteUser(urlDelete, user_id);

    }, function (dismiss) {
        if (dismiss === 'cancel') {
            swal(
                'Cancelled',
                'You canceled to delete this user :)',
                'error'
                );
        }
    })
});




$('#userForm').on('submit', function (e) {
    e.preventDefault() ; 
    var data = $(this).serialize();
    console.log(data);
    storeUser(data,urlForStoringUser);
    // console.log(e); 
});



$('#barangay-form').on('submit', function (e) {
  e.preventDefault() ; 
  console.log(e)  ;    
  var data =  $(this).serialize() ; 

  var lat = $('input[name=geoposition1a]').val() ;
  var lng = $('input[name=geoposition1b').val() ; 
  var city  = $('input[name=geoposition1c').val() ;  
  var address  = $('input[name=geoposition1d').val() ;  

  var locdata = {
    lat : lat , 
    lng : lng , 
    city : city , 
    address : address
}

console.log(locdata) ; 
console.log(data) ; 
storeBarangay(url,locdata, data) ; 
  // storeUser(urlForStoringUser);
});

$('.edituser').on('click', function (evt) {
    console.log(evt);
    var id = $(this).data('id');
    var name = $(this).data('fname');
    var email = $(this).data('email');
    var password = $(this).data('pw');
    var status = $(this).data('status');
    $('.full-name').val(name);
    $('.emailEdit').val(email);
    $('.pWord').val(password);
    $('#basic_modal').modal("show");
    $('#userName').text(name);

    $('.modal-footer').on('click', '.submitButton', function (e) {
        console.log(e);
        e.preventDefault();
        
        var name = $('.full-name').val();
        
        var email = $('.emailEdit').val();
        
        var pWord = $('.pWord').val();
        
        var role_id = $('select[name=role_id]').val();
        
        var barangay_id = $('select[name=barangay_id]').val();
        
        var status = $('select[name=status]').val();


        updateUser(id, name, email, pWord, role_id, barangay_id, status, urlupdateuser); //sends all user data to ajax post request 
        
    });
});





$('.deleteMedicineBtn').on('click', function (arg) {
    var id = $(this).data('id');
    console.log(id);
    swal({
        title: 'Are you sure?',
        text: "You cannot undo this operation",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#66cc99',
        cancelButtonColor: '#ff6666',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
    }).then(function () {
        deleteMedicine(urlToDelete, id);
    }, function (dismiss) {
        // dismiss can be 'cancel', 'overlay',
        // 'close', and 'timer'
        if (dismiss === 'cancel') {
            swal(
                'Cancelled',
                'Medicine Dosage Removal was Cancelled',
                'error'
                );
        }
    })
});


function deleteMedicine(url, id) {
    console.log(url);
    $.ajax({
        method: 'POST',
        url: url,
        data: {
            id: id,
            _token: $('input[name=_token]').val(),
        },
        success: function (data) {
            console.log(data);
            swal({
                title: "Success",
                text: "Medicine Removed successfuly",
                type: "success",
                confirmButtonColor: "#66cc99"
            })
            location.reload(false);
        },
        fail: function (xhr) {
            console.log(xhr.status);
        }
    })
}





  //   var fieldsCompleted = true ; 


  //   $(this).each(function() {
  //       if (!$(this).val()) {
  //         complete = false;


  //     }
  // });




// $.ajax({
// 	method : 'GET',  
// 	url : getAllDistricts,
// 	success: function(data){ 
// 		$(".brgyLabel").text('District');
// 		$('select[name="barangay_id"]').attr('name','district_id');	
// 		$('')
// 		console.log(data);
// 	},
// 	error : function(xhr){ 
// 		if (xhr.status == 500) 
// 		{
// 			swal({
// 				title: "Error",
// 				text: "500",
// 				type: "success",
// 				confirmButtonColor: "#66cc99"
// 			});
// 		}
// 	}
// })






