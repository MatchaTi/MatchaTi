const togglerMode = document.querySelector(".toggler-mode");

let isDark = false;

togglerMode.addEventListener("click", () => {
  isDark = !isDark;
  const root = document.body;

  isDark ? (togglerMode.innerText = "🌞") : (togglerMode.innerText = "🌚");

  root.classList.toggle("dark-mode");
});
