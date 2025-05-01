function input_validation(feild_inputs, functions) {
    for (i = 0; i < feild_inputs.length; i++) {
        input = document.getElementById(feild_inputs[i]);
        error = input.getAttribute("placeholder");
        input_error = document.getElementById(feild_inputs[i] + "_error");
        if (input.value == "") {
            // input_error.innerText = feild_errors[i];
            input_error.innerText = error;
        } else {
            input_error.innerText = "";
            for (j = 0; j < functions[i].length; j++) {
                // alert("run");
                console.log(functions[i][j]);
                // functions[i][j];
                eval(functions[i][j]);
            }
        } // alert(input.value);
    }
}

///feild_inputs and functions must in array 



function validation() {
    event.preventDefault();
    //req documents for validation
    feild_inputs = ["name", "email", "mobile", "password", "c_password"];
    feild_errors = ["Please Enter Your Name", "Please Enter Your Email", "Please Enter Your Mobile", "Please Enter Your Password", "Please Enter Your Confrim Password"];
    name_fun = ["upper()"];
    email_fun = ["email_validation()"];
    mobile_fun = ["mobilereg_validation()"];
    password_fun = ["password_validation()"];
    c_password_fun = ["c_password_validation()"];
    functions = [name_fun, email_fun, mobile_fun, password_fun, c_password_fun];
    // input_validation(feild_inputs, feild_errors);

    //input validation parameter passing by array
    input_validation(feild_inputs, functions);
    error_flag = false;

    // if(!input_validation(feild_inputs[0],feild_errors[0])){
    //     error_flag=false;
    // }else{
    // }
}



//update code 
function box_error(box, color) {
    box.style.borderWidth = "2px";
    box.style.borderColor = color;
    box.style.outline = "none";
}

function input_validation(feild_inputs) {
    for (i = 0; i < feild_inputs.length; i++) {
        input = document.getElementById(feild_inputs[i]);
        error = input.getAttribute("placeholder");
        input_error = document.getElementById(feild_inputs[i] + "_error");
        validate_funcation = feild_inputs[i] + "_validation()";
        if (input.value == "") {
            box_error(input, "red");
        } else {
            box_error(input, "green");
            if (validate_funcation != "") {
                eval(validate_funcation);
                console.log(validate_funcation);
            }
        }
    }
}


//submit function using addListenser

let submit = document.getElementById("submit");
submit.addEventListener("click", function () {
    event.preventDefault();
    let my_form = document.getElementById("my_form")[0];
    feild_inputs = ["name", "email", "mobile", "message"];
    if (input_validation(feild_inputs)) {
        console.log('submit');
        my_form.submit();
    }
});

// using JQuery
$("#submit").click(function () {
    //jQuery
})