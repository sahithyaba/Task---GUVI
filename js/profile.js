function clearStorage(){
    console.log("Cleared");

    // clear the local storage data
    window.localStorage.clear();

    // redirect to login page
    window.location.replace("./login.html");    
}