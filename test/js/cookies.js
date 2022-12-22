let popUp = document.getElementById("cookiePopup");
// Quand l'utilisateur clique sur accepte
document.getElementById("acceptCookie").addEventListener("click", () => {
    //Créer une date
    let d = new Date();
    console.log(d);
    //Increment the current time by 1 minute (cookie will expire after 1 minute)
    console.log(d.setMinutes(2 + d.getMinutes()));
    //Create Cookie withname = myCookieName, value = thisIsMyCookie and expiry time=1 minute
    document.cookie = "myCookieName=thisIsMyCookie; expires = " + d + ";";
    //Hide the popup
    popUp.classList.add("hide");
    popUp.classList.remove("show");
});
//Check if cookie is already present
const checkCookie = () => {
    //Read the cookie and split on "="
    let input = document.cookie.split("=");
    //Check for our cookie
    if (input[0] == "myCookieName") {
        //Hide the popup
        popUp.classList.add("hide");
        popUp.classList.remove("show");
    } else {
        //Show the popup
        popUp.classList.add("show");
        popUp.classList.remove("hide");
    }
};
//Check if cookie exists when page loads
window.onload = () => {
    setTimeout(() => {
        checkCookie();
    }, 2000);
};