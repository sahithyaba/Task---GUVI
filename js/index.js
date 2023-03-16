function Redirect(){
    var len = localStorage.length;

    if(len>0 && len<3){
        window.location.replace("./profile.html");   
    }
    else{
        window.location.replace("./login.html");
    }
}