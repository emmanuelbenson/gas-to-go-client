let resendLink = document.querySelector("#resend");
let btnVerify = document.querySelector("#btnVerify");

const phoneNumber = document.querySelector("input[name='phone']");
const token = document.querySelector("input[name='token']");
const actionType = document.querySelector("input[name='at']");
const callbackUrl = document.querySelector("input[name='cb']");
const csrf = document.querySelector("input[name='_token']");

resendLink.addEventListener("click", e => resend());

btnVerify.addEventListener("click", e => verify(e));

async function resend() {
    let res;

    const data = {
        phoneNumber: phoneNumber.value,
        actionType: actionType.value,
        _token: csrf.value
    };

    try {
        res = await post("/resend-otp", data);
        toastr.success(res.message);
    } catch (error) {
        toastr.error(error.responseJSON.message);

        setTimeout(() => {
            window.location.href = "/sign-up";
        }, 5000);
    }
}

async function verify(event) {
    event.preventDefault();

    let res;
    const token = document.querySelector("input[name='token']");
    const _token = document.querySelector("input[name='_token']");
    const actionType = document.querySelector("input[name='at']");
    const callbackUrl = document.querySelector("input[name='cb']");
    const phone = document.querySelector("input[name='phone']");

    const data = {
        phoneNumber: phone.value,
        token: token.value,
        _token: _token.value,
        actionType: actionType.value
    };

    try {
        res = await post("/verify-otp", data);

        toastr.success(res.message);
        setTimeout(() => {
            window.location.href = "/sign-in";
        }, 5000);
    } catch (error) {
        toastr.error(error.responseJSON.message);
    }
}
