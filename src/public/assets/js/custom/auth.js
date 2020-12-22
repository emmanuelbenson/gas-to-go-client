// Get user account choice
const accountTypes = document.querySelectorAll(".acc");
const accountChoiceInput = document.querySelector("input[name='account']");
const inputs = document.querySelectorAll(".form-input");
const errorElements = document.querySelectorAll(".text-danger");

let timeoute = 5000;
toastr.options.timeOut = timeoute;

accountTypes.forEach(t => {
    t.addEventListener("click", e => {
        const accountChoice = e.target.dataset.choice;
        accountChoiceInput.value = accountChoice;
    });
});

const btnSignUp = document.getElementById("btnSignUp");

btnSignUp.addEventListener("click", e => {
    btnSignUp.disabled = true;
    btnSignUp.innerHTML = "...wait";
    e.preventDefault();

    signUp();
});

async function signUp() {
    clearFormInputsErrors();
    let res;

    try {
        res = await post("/sign-up", getFormInputs());
    } catch (error) {
        btnSignUp.disabled = false;
        btnSignUp.innerHTML = "Sign Up";
        let errors;
        if (error.status) {
            switch (error.status) {
                case 422:
                    toastr.error("There is an error. Please check the fields");
                    errors =
                        typeof error.responseJSON === "string"
                            ? JSON.parse(error.responseJSON).data[0]
                            : error.responseJSON.errors;

                    displayInputsErrors(errors);
                    break;
                case 400 || 401:
                    errors = JSON.parse(error.responseJSON);
                    let err = errors.data[0];
                    toastr.error(err.msg);
                    break;
                case 500:
                    toastr.error(
                        "Something went wrong. Please contact support"
                    );
                    break;
                default:
                    break;
            }
        }
    }

    toastr.success(res.message);

    setTimeout(() => {
        window.location.href = "/verify-otp";
    }, 3000);
}

function getFormInputs() {
    const formData = {};
    inputs.forEach(input => {
        if (input.value) {
            formData[input.name] = input.value;
        }
    });

    formData["_token"] = document.querySelector("input[name='_token']").value;
    formData["account"] = document.querySelector("input[name='account']").value;

    return formData;
}

function clearFormInputsErrors() {
    inputs.forEach(input => {
        if (input.classList.contains("is-invalid")) {
            input.classList.remove("is-invalid");
        }
    });

    errorElements.forEach(el => {
        if (el.hasAttribute("id")) {
            el.innerHTML = "";
        }
    });
}

function displayInputsErrors(errors) {
    if ("param" in errors) {
        inputs.forEach(input => {
            console.log(input.name, errors.param);
            if (input.name === errors.param) {
                input.classList.add("is-invalid");
                input.nextElementSibling.innerHTML = errors.msg;
            }
        });
    } else {
        inputs.forEach(input => {
            if (input.name in errors) {
                input.classList.add("is-invalid");
                input.nextElementSibling.innerHTML = errors[input.name][0];
            }
        });
    }
}

// @if (Session::has('message'))
//             let type = "{{ Session::get('alert-type') }}"
//             let timeoute = 1000;
//             switch(type){
//                 case 'info':
//                     toastr.options.timeOut = timeoute;
//                     toastr.info("{{Session::get('message')}}");
//                     break;

//                 case 'success':
//                     toastr.options.timeOut = timeoute;
//                     toastr.success("{{Session::get('message')}}");
//                     break;

//                 case 'warning':
//                     toastr.options.timeOut = timeoute;
//                     toastr.warning("{{Session::get('message')}}");
//                     break;

//                 case 'error':
//                     toastr.options.timeOut = timeoute;
//                     toastr.error("{{Session::get('message')}}");
//                     break;
//             }
//         @endif
