
// function valid(){
//     name=document.getElementById("name").value;
//     if(name==''){
//         name_error=document.getElementById("name_error")
//         name_error.style.color="red";       
//     }
// }

function Validation() {
    alert("Working");
    // f_name="test";
    // let f_name1="test";
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value.trim();
    let mobile = document.getElementById("mobile").value.trim();
    let password = document.getElementById("password").value;
    let c_password = document.getElementById("c_password").value;

    errors = 0;

    if (name == '') {
        // alert("ENter Your Name");
        document.getElementById("name_error").innerText = "Enter Your Name";
        errors = errors + 1;
        name_error.style.color = "red";
    } else {
        document.getElementById("name_error").innerText = "";
    }

    if (email == '') {
        // alert("Enter Your Email");
        document.getElementById("email_error").innerText = "Enter Your Email";
        errors = errors + 1;
    } else {
        document.getElementById("email_error").innerText = "";
    }

    if (mobile == '') {
        // alert("enter your mobile");
        document.getElementById("mobile_error").innerText = "Enter Mobile No";
        errors = errors + 1;
    } else {

        if (mobile.length != 10) {
            document.getElementById("mobile_error").innerText = "Plz Enter Valid Mobile No.";

        } else {
            document.getElementById("mobile_error").innerText = "";
            // digit validation                    

        }
    }

    if (password == '') {
        // alert("Enter Password");
        document.getElementById("password_error").innerText = "Enter Password";
        errors = errors + 1;
    } else {
        document.getElementById("password_error").innerText = "";
    }

    if (c_password == '') {
        // alert("Re-Enter Password");
        document.getElementById("cpass_error").innerText = "Enter Confrim Password";
        errors = errors + 1;
    } else {
        document.getElementById("cpass_error").innerText = "";
    }

    if (password != '' && c_password != '') {
        if (password != c_password) {
            // alert("wrong Password");
            document.getElementById("cpass_error").innerText = "Invalid Password";
            errors = errors + 1;
        }
    }

    if (errors == 0) {
        alert("success");
    } else {
        event.preventDefault();
    }
    // if(name!='' && email!='' && mobile!='' && password!='' && c_password!=''){
    //     alert("Success");
    // }
}