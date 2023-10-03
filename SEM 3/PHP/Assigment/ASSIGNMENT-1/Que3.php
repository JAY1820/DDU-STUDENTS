<?php

$file_path = 'dummy.txt';
echo "<pre>";
if (file_exists($file_path)) {
    echo "File exists: $file_path<br>";
} else {
    echo "File does not exist: $file_path<br>";
}

// 2. Open a file for reading (input)
$file_handle = fopen($file_path, 'r');

if ($file_handle) {
    echo "File opened successfully for reading.<br>";

    // 3. Get the base name of the file
    $base_name = basename($file_path);
    echo "Base name: $base_name<br>";

    // 4. Get the directory name of the file
    $dir_name = dirname($file_path);
    echo "Directory name: $dir_name<br>";

    // 5. Copy the file
    $copy_success = copy($file_path, 'copy.txt');
    if ($copy_success) {
        echo "File copied successfully.<br>";
    } else {
        echo "File copy failed.<br>";
    }

    // 6. Read the file contents
    $file_contents = file_get_contents($file_path);
    echo "File contents: $file_contents<br>";

    // 7. Write to a file
    $write_success = file_put_contents('newfile.txt', "This is a new file.");
    if ($write_success !== false) {
        echo "Data written to a new file.<br>";
    } else {
        echo "Failed to write data to a new file.<br>";
    }

    // 8. Get file access time
    $access_time = fileatime($file_path);
    echo "Access time: " . date("Y-m-d H:i:s", $access_time) . "<br>";

    // 9. Get file creation time
    $creation_time = filectime($file_path);
    echo "Creation time: " . date("Y-m-d H:i:s", $creation_time) . "<br>";

    // 10. Get file owner
    $file_owner = fileowner($file_path);
    echo "File owner: $file_owner<br>";

    // 11. Get file permissions
    $file_perms = fileperms($file_path);
    echo "File permissions: $file_perms<br>";

    // 12. Get file size
    $file_size = filesize($file_path);
    echo "File size: $file_size bytes<br>";

    // 13. Get file type
    $file_type = filetype($file_path);
    echo "File type: $file_type<br>";

    // 14. Read a character from the file
    $char = fgetc($file_handle);
    echo "Read character: $char<br>";

    // 15. Close the file
    fclose($file_handle);

    // 16. Check if a directory exists
    $dir_path = 'example_dir';
    if (is_dir($dir_path)) {
        echo "Directory exists: $dir_path<br>";
    } else {
        echo "Directory does not exist: $dir_path<br>";
    }

    // 17. Check if a file is executable
    $is_executable = is_executable($file_path);
    echo "Is executable: " . ($is_executable ? 'Yes' : 'No') . "<br>";

    // 18. Check if a file is readable
    $is_readable = is_readable($file_path);
    echo "Is readable: " . ($is_readable ? 'Yes' : 'No') . "<br>";

    // 19. Check if a file is writable
    $is_writable = is_writable($file_path);
    echo "Is writable: " . ($is_writable ? 'Yes' : 'No') . "<br>";

    // 20. Create a directory
    $create_dir_success = mkdir($dir_path);
    if ($create_dir_success) {
        echo "Directory created successfully: $dir_path<br>";
    } else {
        echo "Failed to create directory: $dir_path<br>";
    }

    // 21. Remove a directory
    $remove_dir_success = rmdir($dir_path);
    if ($remove_dir_success) {
        echo "Directory removed successfully: $dir_path<br>";
    } else {
        echo "Failed to remove directory: $dir_path<br>";
    }

    // 22. Delete a file
    $delete_success = unlink('copy.txt');
    if ($delete_success) {
        echo "File deleted successfully: copy.txt<br>";
    } else {
        echo "Failed to delete file: copy.txt<br>";
    }
} else {
    echo "File handle couldn't be opened for reading.<br>";
}
// Open the CSV file for reading
echo "<br>";
$file = fopen('data.csv', 'r');

// Read and parse CSV data
while (($row = fgetcsv($file)) !== false) {
    echo json_encode($row) . "<br>";
}
echo "</br>";
fclose($file);
// Open the text file for reading
$file = fopen('dummy.txt', 'r');

// Read and display each line
while (!feof($file)) {
    $line = fgets($file);
    echo $line;
}

// Close the file
fclose($file);
echo "</pre>";
