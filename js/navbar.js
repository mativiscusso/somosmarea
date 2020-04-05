function stickyElement(e) {
  var navbar = document.querySelector("#navigation");
  var scrollValue = window.scrollY;

  if (scrollValue > 50) {
    navbar.classList.add("is-fixed");
  } else if (scrollValue < 50) {
    navbar.classList.remove("is-fixed");
  }
}

window.addEventListener("scroll", stickyElement);
