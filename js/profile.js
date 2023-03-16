function displayProfile(){
    var username = localStorage.getItem("username");
    var password = localStorage.getItem("password");

    document.getElementById("username").value = username;
    document.getElementById("password").value = password;
}

function clearStorage(){
    console.log("Cleared");

    // clear the local storage data
    window.localStorage.clear();

    // redirect to login page
    window.location.replace("./login.html");    
}