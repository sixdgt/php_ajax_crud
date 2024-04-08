$(document).ready(function(){
    getKycData();

    $('#kycForm').on('submit', function(e){
        e.preventDefault();
        let full_name = $('#full_name').val();
        let email = $('#email').val();
        let contact = $('#contact').val();
        let address = $('#address').val();
        let password = $('#password').val();

        $.ajax({
            type: "POST",
            url: "post_data.php",
            dataType: "application/json",
            data: {
                full_name: full_name,
                email: email,
                contact: contact,
                address: address,
                password: password
            },
            success: function(response){
                console.log(JSON.parse(JSON.stringify(response)));
            }
        });

    });
});

function getKycData(){
    $.ajax({
        type: "GET",
        url: "fetch_data.php",
        success: function(response){
            // we have to use loop to get data from response
            $.each(JSON.parse(response), function(key, value){
                $("#tableData").append(
                    "<tr>" +
                    "<td>"+ value['full_name'] +"</td>" +
                    "<td>"+ value['email'] +"</td>" +
                    "<td>"+ value['contact'] +"</td>" +
                    "<td>"+ value['address'] +"</td>" +
                    "</tr>"
                );
            });
        }
    });
}