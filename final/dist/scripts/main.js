console.log("Script Loaded");

const bar = document.getElementById("bar");
const menu = document.getElementById("menu");
bar.addEventListener("click", () => {
  menu.classList.toggle("show-menu")
  console.log('clicked hamburger menu');
})