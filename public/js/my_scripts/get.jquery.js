//retrieving barangays through city id 
/**
 Used for the User Information
 **/
 function retrieveBarangaysThruCity(id, url) {
    console.log(url);
    $.ajax({
        method: 'GET',
        url: url,
        data: {
            'id': id
        },
        success: function (data) {
            console.log(data);
            //append data 
        },
        error: function (xhr) {
            console.log(xhr.status);
        }
    })
}

// Check Email Availability 
function getTodaysOrders(url) {
    $.ajax({
        method: 'GET',
        url: url,
        success : function (data){ 
            console.log(data)
        }, 
        error : function (xhr, res) { 
            console.log(xhr.status);
        }
    })  
}


