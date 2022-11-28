const callbackButton = document.querySelector(".desktop-header .zuzu-btn");
const overlay = document.querySelector("#overlay");
const closeDialog = overlay.querySelector(".close-dialog");
const sendCallbackBtn = overlay.querySelector(".zuzu-btn");
const callbackName = overlay.querySelector("#callback-name");
const callbackPhone = overlay.querySelector("#callback-phone-number");

let phoneNumber = callbackPhone.value;

const onSendCallbackForm = (event) => {
  event.preventDefault();

  let name = callbackName.value;
  let phoneNumber = callbackPhone.value;

  if (!name || !phoneNumber) {
    alert("Вы не заполнили все поля");

    if (!name) {
      callbackName.classList.add("not-validated");
    }

    if (!phoneNumber) {
      callbackPhone.classList.add("not-validated");
    }
    return;
  }

  let formData = new FormData();
  formData.append("name", name);
  formData.append("phoneNumber", phoneNumber);

  fetch("callback.php", {
    method: "post",
    body: formData,
  }).then(() => {
    eraseInputData();
    overlay.classList.add("hidden");
    setTimeout(() => {
      alert(
        "Спасибо за обращение в компанию ZuzuMaster! Ваше письмо будет рассмотрено в кратчайшие сроки. Менеджер свяжется с вами в ближайшее время."
      );
    }, 100);
  });
};

const eraseInputData = () => {
  callbackName.value = "";
  callbackPhone.value = "+7";
  phoneNumber = callbackPhone.value;
  callbackName.classList.remove("not-validated");
  callbackPhone.classList.remove("not-validated");
  document.body.classList.remove("no-overflow");
};

const onOpenForm = (event) => {
  event.preventDefault();

  document.body.classList.add("no-overflow");
  overlay.classList.remove("hidden");
};

const onCloseForm = (event) => {
  eraseInputData();
  document.body.classList.remove("no-overflow");
  overlay.classList.add("hidden");
};

const formatPhoneNumber = (input) => {
  if (/\d/.test(input) && phoneNumber.length < 12) {
    phoneNumber += input;
  } else if (input === null && phoneNumber.length > 2) {
    phoneNumber = phoneNumber.slice(0, -1);
  }
  return phoneNumber;
};

const onPhoneNumberChange = (event) => {
  callbackPhone.value = formatPhoneNumber(event.data);
};

callbackButton.addEventListener("click", onOpenForm);
closeDialog.addEventListener("click", onCloseForm);
sendCallbackBtn.addEventListener("click", onSendCallbackForm);
callbackPhone.addEventListener("input", onPhoneNumberChange);
