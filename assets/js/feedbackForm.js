const button = document.querySelector(".feedback-section .zuzu-btn");
const form = document.querySelector("#feedback-form");
const hiddenBtn = document.querySelector("#hidden-load-file-btn");
const loadFileBtn = document.querySelector("#load-file-btn");
const fileDesc = document.querySelector("#file-desc");
const nameInput = form.querySelector("#name");
const phoneNumberInput = form.querySelector("#phoneNumber");
const commentaryInput = form.querySelector("#commentary");

const onSendFeedback = (event) => {
  event.preventDefault();

  let name = nameInput.value;
  let phoneNumber = phoneNumberInput.value;
  let commentary = commentaryInput.value;

  if (!name || !phoneNumber) {
    alert("Вы не заполнили все необходимые поля");

    if (!name) {
      nameInput.classList.add("not-validated");
    }

    if (!phoneNumber) {
      phoneNumberInput.classList.add("not-validated");
    }
    return;
  }

  let formData = new FormData();
  formData.append("name", name);
  formData.append("phoneNumber", phoneNumber);
  [...hiddenBtn.files].forEach((file) => {
    formData.append("file[]", file);
  });
  formData.append("commentary", commentary);

  fetch("mail.php", {
    method: "post",
    body: formData,
  }).then(() => {
    nameInput.value = "";
    phoneNumberInput.value = "";
    commentaryInput.value = "";
    fileDesc.textContent = "";
    nameInput.classList.remove("not-validated");
    phoneNumberInput.classList.remove("not-validated");

    setTimeout(() => {
      alert(
        "Спасибо за обращение в компанию ZuzuMaster! Ваше письмо будет рассмотрено в кратчайшие сроки. Менеджер свяжется с вами в ближайшее время."
      );
    }, 100);
  });
};

const onLoadFile = (event) => {
  event.preventDefault();
  hiddenBtn.click();
};

const onLoadFileChange = (event) => {
  const files = [...hiddenBtn.files];
  fileDesc.textContent = `Файлов прикреплено: ${files.length}`;
};

loadFileBtn.addEventListener("click", onLoadFile);
hiddenBtn.addEventListener("change", onLoadFileChange);
button.addEventListener("click", onSendFeedback);
