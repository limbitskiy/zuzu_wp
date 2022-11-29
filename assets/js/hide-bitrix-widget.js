const widget = document.querySelector("[data-b24-crm-button-cont]");
const footer = document.querySelector("footer");

// const onDocumentScroll = () => {
//   if (window.scrollY > 6000) {
//     widget.classList.remove("b24-widget-button-visible");
//     widget.classList.add("b24-widget-button-hidden");
//   } else {
//     widget.classList.remove("b24-widget-button-hidden");
//     widget.classList.add("b24-widget-button-visible");
//   }
// };

// document.addEventListener("scroll", onDocumentScroll);

let options = {
  root: null,
  rootMargin: "0px",
  threshold: 0,
};

const callback = (entries, observer) => {
  // console.log(entries, observer);
  if (entries[0].isIntersecting) {
    widget.classList.remove("b24-widget-button-visible");
    widget.classList.add("b24-widget-button-hidden");
  } else {
    widget.classList.remove("b24-widget-button-hidden");
    widget.classList.add("b24-widget-button-visible");
  }
};

let observer = new IntersectionObserver(callback, options);

observer.observe(footer);
