const button = document.querySelector(".feedback-section .zuzu-btn");
const form = document.querySelector("#feedback-form");
const hiddenBtn = document.querySelector("#hidden-load-file-btn");
const loadFileBtn = document.querySelector("#load-file-btn");
const fileDesc = document.querySelector("#file-desc");

const nameInput = form.querySelector("#name");
const phoneNumberInput = form.querySelector("#phoneNumber");
// const file = form.querySelector('#phoneNumber')
const commentaryInput = form.querySelector("#commentary");

let file = null;

const onSendFeedback = (event) => {
  event.preventDefault();

  const name = nameInput.value;
  const phoneNumber = phoneNumberInput.value;
  const commentary = commentaryInput.value;

  let formData = new FormData();
  formData.append("name", name);
  formData.append("phoneNumber", phoneNumber);
  formData.append("file", file);
  formData.append("commentary", commentary);

  fetch("mail.php", {
    method: "post",
    body: formData,
  }).then(() => alert("Спасибо! Ваше письмо отправлено нашим менеджерам."));
};

const onLoadFile = (event) => {
  event.preventDefault();
  hiddenBtn.click();
};

const onLoadFileChange = (event) => {
  fileDesc.textContent = event.target.files[0].name;
  file = event.target.files[0];
};

loadFileBtn.addEventListener("click", onLoadFile);
hiddenBtn.addEventListener("change", onLoadFileChange);
button.addEventListener("click", onSendFeedback);
