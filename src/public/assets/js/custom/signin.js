// SIGN UP
const btnSignIn = document.querySelector("#btnSignIn");
btnSignIn.addEventListener("click", e => {
    e.preventDefault();

    signIn();
});

const phoneNumber = document.querySelector("input[name='phoneNumber']");
const password = document.querySelector("input[name='password']");
const _token = document.querySelector("input[name='_token']");

phoneNumber.addEventListener("keyup", e => {
    validateFields(e);
});

password.addEventListener("keyup", e => {
    validateFields(e);
});

async function signIn() {
    btnSignIn.innerHTML = "...wait";
    btnSignIn.disabled = true;

    if (!validateForm()) {
        return;
    }

    let res;

    const data = {
        phoneNumber: phoneNumber.value,
        password: password.value,
        _token: _token.value
    };

    try {
        res = await post("/sign-in", data);

        setTimeout(() => {
            window.location.href = "/dashboard";
        }, 1000);
    } catch (error) {
        btnSignIn.innerHTML = "Sign In";
        btnSignIn.disabled = false;
        if (error.status === 419) {
            window.location.href = "/sign-in";
        }

        if (error.status === 404) {
            error = JSON.parse(error.responseJSON);
            error = error.data[0];
            toastr.error(error.msg);
        }

        if (error.status === 401) {
            toastr.error(error.responseJSON.message);

            setTimeout(() => {
                window.location.href = "/verify-otp";
            }, 3000);
        }

        if (error.status == 500) {
            toastr.error("Something went wrong. Please contact support");
        }
    }
}

function validateFields(e) {
    if (e.target.value === "" || e.target.value < 1) {
        document.querySelector("#" + e.target.name + "Error").innerHTML =
            "required";
        e.target.classList.add("is-invalid");
    } else {
        document.querySelector("#" + e.target.name + "Error").innerHTML = "";
        e.target.classList.remove("is-invalid");
    }
}

function validateForm() {
    if (phoneNumber.value === "" || password.value === "") {
        return false;
    } else {
        return true;
    }
}
