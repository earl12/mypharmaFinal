$(document).ready(function() {

	$('.modal').on('hidden.bs.modal', function(){
		$(this).find('form')[0].reset();
	});



	$('#addMedicineForm').on('submit', function (e) {
		e.preventDefault() ;
		//serializing the data..
		var data = $(this).serialize();	

		console.log(data);
		
		// storeUser(data,urlForStoringUser);

	});


	function showConfirmAlert(id)
	{	
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this imaginary file!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				swal("Poof! Your imaginary file has been deleted!", {
					icon: "success",
				});
			} else {
				swal("Your imaginary file is safe!");
			}
		});
	}






});