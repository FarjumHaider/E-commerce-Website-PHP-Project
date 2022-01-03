function get(id) {
  return document.getElementById(id);

}
function checkAdminUname(e) {

  var xhr= new XMLHttpRequest();
  xhr.open("GET","checkAdminUname.php?username="+e.value,true);
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText.trim() == "Invalid") {
        get("err_username").innerHTML = "Username Exists";
      }
      else {
        get("err_username").innerHTML = "";
      }
    }

  };
  xhr.send();
}
