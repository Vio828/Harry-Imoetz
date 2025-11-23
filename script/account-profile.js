const uploadInput = document.getElementById("upload-profile");
const profileImg = document.getElementById("profile-img");
const uploadText = document.querySelector(".new-pic");
const removeText = document.querySelector(".remove");

const originalImage = "/image/PP.png";

uploadText.addEventListener("click", () => {
  uploadInput.click();
});

uploadInput.addEventListener("change", function () {
  const file = this.files[0];
  if (file) {
    profileImg.src = URL.createObjectURL(file);
  }
});

removeText.addEventListener("click", () => {
  profileImg.src = originalImage;
  uploadInput.value = ""; 
});
