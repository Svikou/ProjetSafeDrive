const importPhotoButton = document.getElementById("import-photo");
const profilePicture = document.getElementById("profile-picture");

importPhotoButton.addEventListener("click", () => {
    const fileInput = document.createElement("input");
    fileInput.type = "file";
    fileInput.accept = "image/*";
    fileInput.click();

    fileInput.addEventListener("change", () => {
        const file = fileInput.files[0];
        const reader = new FileReader();

        reader.onload = () => {
            profilePicture.src = reader.result;
        };

        reader.readAsDataURL(file);
    });
});
