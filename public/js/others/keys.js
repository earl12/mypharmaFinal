let checkAfterTypingSeniorCitizenId = {
	callback: function (value) { 
		checkSeniorCitizenId(urlcheckid)  ; 
	},
	wait: 1000,
	highlight: true,
	allowSubmit: false,
	captureLength: 2
}

let checkEmail = {
	callback: function (value) { 
		checkEmailAvailability(urlEmail)  ; 
	},
	wait: 1000,
	highlight: true,
	allowSubmit: false,
	captureLength: 2
}

$('input[name=id]').typeWatch(checkAfterTypingSeniorCitizenId) ;
$('input[name=email]').typeWatch(urlEmail) ;

function checkEmailAvailability(url) {
	var email = $('input[name=email]').val();
	$.ajax({
		method: 'GET',
		url: url,
		data: {
			email: email,
		},
		success: function (data)
		{
			if (data > 0) {
				console.log('email taken');
			} else {
				swal({
					title: "Email is available ",
					text: "That email is available",
					type: "info",
					confirmButtonColor: "#66cc99"
				});
			}
		},
		error: function (xhr) {
			console.log(xhr.status);
		}
	});
}



function checkSeniorCitizenId(url){
	var senior_citizen_id = $('input[name=id]').val() ; 
	$.get(url, { id : senior_citizen_id }).done(function(data) {
		console.log(data) ; 
		if(data.count <= 0){
			displayResponse(data.message);

		}
		else {

		}
	}); 
}


let checkAfterTypingSeniorCitizenPhone = {
	callback: function (value) { 
		checkSeniorCitizenId(url) ;  
	},
	wait: 1000,
	highlight: true,
	allowSubmit: false,
	captureLength: 2
}


function checkSeniorCitizenPhone(url){
	var senior_citizen_id = $('input[name=phone]') ; 
	$.get(url, { id : senior_citizen_id })
	.done(function(data) {
		console.log(data) ; 
	}); 

}

function displayResponse($msg) {
	swal({
		title: "Available for registration",
		text: $msg ,
		type: "success",
		confirmButtonColor: "#66cc99"
	});
}

