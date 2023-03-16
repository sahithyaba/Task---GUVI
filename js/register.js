
function submitData(){
    console.log("Fnc Called");
    $(document).ready(function(){
        $("#register-form").click(function (e){
            e.preventDefault();
    
            var username = $("InputUsername").val();
            var password = $("InputPassword").val();
            console.log(e);
            $ajax({
                url: "register.php",
                method: "POST",
                data:{
                    username: username,
                    password: password,
                },
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function  (data){
                    alert(data);
                    $("#register-form")[0].reset();
                },
                error: function(xhr, status, error){
                    console.log(xhr.responseText);
                }
            })
    
        })
    })
    
    }