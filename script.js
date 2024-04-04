$(document).ready(function(){
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