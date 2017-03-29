
function validateForm(){
var category = $("#category");
if (category.val() == null) {
    //If the "Select Category" option is selected display error.
    alert("Please select an option!");
    return false;
    }
return true;
}
function validate(){
 var password = document.getElementById("password").value;
 var confirmPassword = document.getElementById("confirmed").value;
 if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
}

