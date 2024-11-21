<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {

    $("#usercheck").hide();
    let usernameError = true;
    $("#usernames").keyup(function () {
        validateUsername();
    });

    function validateUsername() {
        let usernameValue = $("#usernames").val();
        if (usernameValue.length === "") {
            $("#usercheck").show();
            usernameError = false;
            return false;
        } else if (usernameValue.length < 3 || usernameValue.length > 10) {
            $("#usercheck").show();
            $("#usercheck").html("length of username must be between 3 and 10");
            usernameError = false;
            return false;
        } else {
            $("#usercheck").hide();
            usernameError = true;
        }
    }

    const email = document.getElementById("email");
    let emailError = true;
    email.addEventListener("blur", () => {
        let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
        let s = email.value;
        if (regex.test(s)) {
            email.classList.remove("is-invalid");
            emailError = true;
        } else {
            email.classList.add("is-invalid");
            emailError = false;
        }
    });

    $("#passcheck").hide();
    let passwordError = true;
    $("#password").keyup(function () {
        validatePassword();
    });

    function validatePassword() {
        let passwordValue = $("#password").val();
        if (passwordValue.length === "") {
            $("#passcheck").show();
            passwordError = false;
            return false;
        }
        if (passwordValue.length < 3 || passwordValue.length > 10) {
            $("#passcheck").show();
            $("#passcheck").html(
                "length of your password must be between 3 and 10"
            );
            $("#passcheck").css("color", "red");
            passwordError = false;
            return false;
        } else {
            $("#passcheck").hide();
            passwordError = true;
        }
    }

    $("#conpasscheck").hide();
    let confirmPasswordError = true;
    $("#conpassword").keyup(function () {
        validateConfirmPassword();
    });

    function validateConfirmPassword() {
        let confirmPasswordValue = $("#conpassword").val();
        let passwordValue = $("#password").val();
        if (passwordValue !== confirmPasswordValue) {
            $("#conpasscheck").show();
            $("#conpasscheck").html("Password didn't Match");
            $("#conpasscheck").css("color", "red");
            confirmPasswordError = false;
            return false;
        } else {
            $("#conpasscheck").hide();
            confirmPasswordError = true;
        }
    }

    $("#submitbtn").click(function () {
        validateUsername();
        validatePassword();
        validateConfirmPassword();
        email.dispatchEvent(new Event('blur')); 
        
        if (
            usernameError &&
            passwordError &&
            confirmPasswordError &&
            emailError
        ) {
            return true;
        } else {
            return false;
        }
    });
});
</script>

</head>

<body>
    <p class="text-center pt-4 pb-4"> FORM VALIDATION USING JQUERY </p>

    <div class="container">
        <div class="col-lg-8 m-auto d-block">
            <form method="post" name="validation" id="validation">
                <div class="form-group">
                    <label for="user"> Username: </label>
                    <input type="text" name="username" id="usernames" class="form-control">
                    <small id="usercheck" style="color: red; font-size:14px;"> Username is missing </small>
                </div>

                <div class="form-group">
                    <label for="user"> Email:  </label>
                    <input type="email" name="email" id="email" required class="form-control">
                    <small id="emailvalid" style="color: red; font-size:14px;" class="invalid-feedback"> Your email must be a valid email </small>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="pass" id="password" class="form-control">
                    <small id="passcheck" style="color: red; font-size:14px;">Please Fill the password</small>
                </div>

                <div class="form-group">
                    <label for="conpassword"> Confirm Password: </label>
                    <input type="password" name="username" id="conpassword" class="form-control">
                    <small id="conpasscheck" style="color: red; font-size:14px;"> Password didn't match </small>
                </div>

                <input type="submit" id="submitbtn" value="Submit" class="btn btn-primary">
            </form>
        </div>
    </div>

</body>

</html>