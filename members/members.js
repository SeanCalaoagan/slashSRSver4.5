function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  
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