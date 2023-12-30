
let s = document.getElementById("pass")


function submit_page(){
let user = document.getElementById("name").value
let pass = document.getElementById("pass").value;
  if(user=="akshay" && pass == 123)
  {  
    alert("Login succesfully....................");
    location.href = "libhome.html";
  }
  else{
    alert("Please Enter Correct User Name And Password........")
  }
}