<?php
$imagesFolder = "C:\xammp\htdocs\Children Game Project\images";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $avatar = $_POST['avatar'];
    $gamingName = $_POST['gaming_name'];
    $age = $_POST['age'];

    // Update the user profile
    $avatarFilePath = $imagesFolder . DIRECTORY_SEPARATOR . $avatar;
    
    // Check if the selected avatar file exists
    if (file_exists($avatarFilePath)) {
        // Display the profile information and avatar
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>User Profile</title>
            <style>
                .avatar {
                    width: 150px;
                    height: 150px;
                    object-fit: cover;
                    border-radius: 50%;
                }
                .avatar-preview {
                    display: inline-block;
                    width: 50px;
                    height: 50px;
                    object-fit: cover;
                    border-radius: 50%;
                    margin-right: 10px;
                }
            </style>
        </head>
        <body>
            <h1>User Profile</h1>
            <form method="POST">
                <label for="avatar">Select Avatar:</label>
                <select name="avatar" id="avatar" onchange="previewAvatar()">
                    <option value="avatar1.jpg" <?php if ($avatar === 'avatar1.jpg') echo 'selected'; ?>>Avatar 1</option>
                    <option value="avatar2.jpg" <?php if ($avatar === 'avatar2.jpg') echo 'selected'; ?>>Avatar 2</option>
                    <option value="avatar3.jpg" <?php if ($avatar === 'avatar3.jpg') echo 'selected'; ?>>Avatar 3</option>
                </select>
                <br><br>
                <label for="gaming_name">Gaming Name:</label>
                <input type="text" name="gaming_name" id="gaming_name" value="<?php echo $gamingName; ?>">
                <br><br>
                <label for="age">Age:</label>
                <input type="number" name="age" id="age" value="<?php echo $age; ?>">
                <br><br>
                <input type="submit" value="Save Profile">
            </form>
            <br>
            <img src="<?php echo $avatarFilePath; ?>" alt="Avatar" class="avatar">
            <img src="<?php echo $avatarFilePath; ?>" alt="Avatar Preview" class="avatar-preview" id="avatarPreview">
            
            <script>
                function previewAvatar() {
                    var avatarSelect = document.getElementById("avatar");
                    var selectedAvatar = avatarSelect.options[avatarSelect.selectedIndex].value;
                    var avatarPreview = document.getElementById("avatarPreview");
                    var previewFilePath = "<?php echo $imagesFolder . DIRECTORY_SEPARATOR; ?>" + selectedAvatar;
                    avatarPreview.src = previewFilePath;
                }
            </script>
        </body>
        </html>
        <?php
    } else {
        echo "Selected avatar not found.";
    }
} else {
    // Display the form to select the avatar
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>User Profile</title>
        <link rel="stylesheet" href="profile.css">
        <script>src= "profile.js"</script>
    </head>
    <body>
        <h1>User Profile</h1>
        <form method="POST">
            <label for="avatar">Select Avatar:</label>
            <select name="avatar" id="avatar" onchange="previewAvatar()">
                <option value="avatar1.jpg">Avatar 1</option>
                <option value="avatar2.jpg">Avatar 2</option>
                <option value="avatar3.jpg">Avatar 3</option>
            </select>
            <img src="" alt="Avatar Preview" class="avatar-preview" id="avatarPreview">
            <br><br>
            <label for="gaming_name">Gaming Name:</label>
            <input type="text" name="gaming_name" id="gaming_name">
            <br><br>
            <label for="age">Age:</label>
            <input type="number" name="age" id="age">
            <br><br>
            <input type="submit" value="Save Profile">
        </form>
        <br>
        
        
        <script>
            function previewAvatar() {
                var avatarSelect = document.getElementById("avatar");
                var selectedAvatar = avatarSelect.options[avatarSelect.selectedIndex].value;
                var avatarPreview = document.getElementById("avatarPreview");
                var previewFilePath = "<?php echo $imagesFolder . DIRECTORY_SEPARATOR; ?>" + selectedAvatar;
                avatarPreview.src = previewFilePath;
            }
        </script>
    </body>
    </html>
    <?php
}
?>
