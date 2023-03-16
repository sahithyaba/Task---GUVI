    console.log("Fnc Called");
    $(document).ready(function(){
        $("#register-form").submit(function (e){
            e.preventDefault();
    
            var username = $("input[name='username']").val();
            var password = $("input[name='password']").val();
            // alert(username);
            $.ajax({
                url: "php/register.php",
                method: "POST",
                data: {
                    username: username,
                    password: password,
                },
                success: function (data) {
                    // alert(data);
                    alert("User Successfully Registered")
                    $("#register-form")[0].reset();
                    var url = "./login.html";
                    $(location).attr('href',url);
                },
                error: function(xhr, status, error){
                    console.log(xhr.responseText);
                },
            });
    
        });
    });

    function storeData(){
    
        // storing the current registered data in local storage
        let username,password,email,phoneNumber;
        username=document.getElementById("username").value;
        password=document.getElementById("password").value;
        email=document.getElementById("email").value;
        phoneNumber=document.getElementById("phoneNumber").value;
    
        localStorage.setItem("username",username)
        localStorage.setItem("password",password)
        localStorage.setItem("email",email)
        localStorage.setItem("phoneNumber",phoneNumber)
    }