function previewAvatar(event) {
  var reader = new FileReader();
  reader.onload = function () {
      var preview = document.getElementById('avatarPreview');
      preview.src = reader.result;
  };
  reader.readAsDataURL(event.target.files[0]);
}