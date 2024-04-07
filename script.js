document.addEventListener("DOMContentLoaded", function () {
  var content = document.querySelector(".fade-in");
  content.style.opacity = 1;

  const sidebar = document.querySelector(".sidebar");
  const openButton = document.querySelector("#open-sidebar");

  openButton.addEventListener("click", () => {
    sidebar.classList.toggle("sidebar-open");
  });
});
