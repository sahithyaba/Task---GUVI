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
                alert("User Successfully Login");
                var url = "./profile.html";
                $(location).attr('href',url);
            },
            error: function(xhr, status, error){
                console.log(xhr.responseText);
            },
        });

    });
});

function storeData(){

    // storing the current data in local storage
    let username,password;
    username=document.getElementById("username").value;
    password=document.getElementById("password").value;

    localStorage.setItem("username",username)
    localStorage.setItem("password",password)
}