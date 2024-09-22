const toggler = document.querySelector(".toggler-mode");
const btnHamburger = document.querySelector(".btn-hamburger");
const navLink = document.querySelector(".nav-link");
const form = document.querySelector(".form");
const input = document.querySelector(".input");
const btnUser = document.querySelector(".btn-user");

let isDark = false;

btnHamburger.addEventListener("click", () => {
  navLink.classList.toggle("show");
});

const username = localStorage.getItem("name");
if (username) {
  alert(`Welcome back ${username}!`);
  btnUser.innerText = `Hi ${username}!`;
}

localStorage.setItem("theme", "light-mode");
let theme = localStorage.getItem("theme");
if (theme === "dark-mode") {
  console.log(theme);
  document.body.classList.add(theme);
  theme === "dark-mode"
    ? (toggler.innerText = "🌞")
    : (toggler.innerText = "🌚");
}

toggler.addEventListener("click", () => {
  isDark = !isDark;
  const root = document.body;

  isDark ? (toggler.innerText = "🌞") : (toggler.innerText = "🌚");

  root.classList.toggle("dark-mode");
  localStorage.setItem("theme", isDark ? "dark-mode" : "light-mode");
});

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const value = input.value;
  alert(`Hi ${value}!`);
  localStorage.setItem("name", value);
  btnUser.innerText = `Hi ${value}!`;
  input.value = "";
});
