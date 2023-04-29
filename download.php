 <?php
include 'connection.php';

// Check if the file ID has been provided
if (!isset($_GET['file'])) {
    die("File ID not provided.");
}

// Retrieve the file ID from the query string
$file_id = $_GET['file'];

// Retrieve the file data from the database
$sql = "SELECT * FROM user WHERE id='$file_id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $file_name = $row['Name'];
    $file_content = $row['file_content'];

    // Set the headers for the download
   // Set the headers for the download and specify the path to save the file
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=$file_name");
header("Content-Transfer-Encoding: binary");
header("Content-Length: " . strlen($file_content));
readfile("filez/$file_name");

// Stop script execution
die();

    // Output the file data
    echo $file_content;

    // Stop script execution
    die();
} else {
    die("Unable to retrieve file data from the database.");
}
?> //
