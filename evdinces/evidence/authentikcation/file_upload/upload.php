<?php
// Check if form is submitted
if (isset($_POST['submit'])) {
    // Get file details
    $file = $_FILES['file'];
    
    // Define the maximum allowed file size (in bytes)
    $maxFileSize =  100 * 1024; //100k

    // Get the file size
    $fileSize = $file['size'];

    // Check if the file size is within the allowed limit
    if ($fileSize > $maxFileSize) {
        echo "Error: The file size exceeds the maximum allowed size of 100KB.";
    } else {
        // Specify the target directory to save the uploaded file
        $targetDir = "uploads/";
        
        // Create the directory if it doesn't exist
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        
        // Specify the target file path
        $targetFile = $targetDir . basename($file['name']);
        
        // Move the uploaded file to the target directory
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            echo "File uploaded successfully!<br>";

            // Check file type to display accordingly
            $fileType = mime_content_type($targetFile); // Get the MIME type of the file
            
            // Display file based on its type
            if (strpos($fileType, 'image') !== false) {
                // If it's an image, display it
                echo "<h3>Uploaded Image:</h3>";
                echo "<img src='" . $targetFile . "' alt='Uploaded Image' width='300'><br>";
            } else {
                // If it's not an image, display a link to download
                echo "<h3>Uploaded File:</h3>";
                echo "<a href='" . $targetFile . "' target='_blank'>Download the file</a><br>";
            }
        } else {
            echo "Error: There was an issue uploading the file.";
        }
    }
}
?>
