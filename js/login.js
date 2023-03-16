console.log("Fnc Called");
$(document).ready(function(){
    $("#login-form").submit(function (e){
        e.preventDefault();

        var username = $("input[name='username']").val();
        var password = $("input[name='password']").val();
        // alert(username);
        $.ajax({
            url: "php/login.php",
            method: "POST",
            data: {
                username: username,
                password: password,
            },
            success: function (data) {
                // alert(data);
                alert("User Successfully Login")
                $("#login-form")[0].reset();
                var url = "./profile.html";
                $(location).attr('href',url);
            },
            error: function(xhr, status, error){
                console.log(xhr.responseText);
            },
        });

    });
});