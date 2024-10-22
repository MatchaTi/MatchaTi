const togglerMode = document.querySelector(".toggler-mode");
const postImage = document.querySelector("#photo");
const deletePhotoBtn = document.querySelector("#deletePhotoBtn");
const inputPhoto = document.querySelector("#deletePhoto");
console.log(deletePhotoBtn);
console.log(inputPhoto);

let isDark = false;

togglerMode.addEventListener("click", () => {
  isDark = !isDark;
  const root = document.body;

  isDark ? (togglerMode.innerText = "🌞") : (togglerMode.innerText = "🌚");

  root.classList.toggle("dark-mode");
});

deletePhotoBtn.addEventListener("click", function () {
  console.log(deletePhotoBtn);
  console.log(inputPhoto);
  const confirmDelete = confirm("Are you sure you want to delete this photo?");
  if (confirmDelete) {
    deletePhotoInput.value = "1";

    const postImage = document.querySelector(".post-image img");
    if (postImage) {
      postImage.style.display = "none";
    }

    deletePhotoBtn.disabled = true;
  }
});
