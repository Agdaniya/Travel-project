function validateForm() {
    var name = document.forms["myForm"]["name"].value;
    var email = document.forms["myForm"]["email"].value;
    var message = document.forms["myForm"]["message"].value;
    if (name == ""  email == ""  message == "") {
      alert("Please fill in all fields");
      return false;
    }
  }