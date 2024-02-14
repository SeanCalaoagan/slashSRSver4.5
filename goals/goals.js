// Function that will redirect user to login page after 1 minute (will redirect to login page)
onInactive(60000, function(){
    alert('Logging out due to inactivity');
    window.location="../login/login.php";
});
    
function onInactive(ms, cb) {
    var wait = setTimeout(cb, ms);
    document.onmousemove = document.mousedown = document.mouseup
    = document.onkeydown = document.onkeyup = document.focus = function(){
        clearTimeout(wait);
        wait = setTimeout(cb, ms);

    };
    
}