$("form").submit(function(e) {
    let error = "";
    if ($("#email").val() == "") {
        error += "The email field is required.<br>";
    }
    if ($("#subject").val() == "") {
        error += "The subject field is required.<br>";
    }
    if ($("#content").val() == "") {
        error += "The content field is required.<br>";
    }
    //test if there was an error or not
    if (error != "") {
        $("#error").html('<div class="alert alert-danger"' +
            'role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');

        return false;

    } else {
        return true;
    }
});
