<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $examNo = $_POST['exam_no'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    
    // Get student marks from form input
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];
    $subject4 = $_POST['subject4'];
    $subject5 = $_POST['subject5'];

    // Calculate total and average marks
    $totalMarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
    $averageMarks = $totalMarks / 5;
    
    $photoFile = $_FILES['photo'];
    $photoName = $photoFile['name'];
    $photoSize = $photoFile['size'];
    $photoTmpName = $photoFile['tmp_name'];
    
    if ($photoSize > 61600) { // 25KB in bytes
        echo "Error: Photo size exceeds 25KB.";
        exit();
    }
    
    if (!move_uploaded_file($photoTmpName, "photos/$photoName")) {
        echo "Error uploading photo.";
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
</head>
<body>
    <h1>Student Result</h1>
    <h2>Exam No: <?php echo htmlspecialchars($examNo); ?></h2>
    <p>Course: <?php echo htmlspecialchars($course); ?></p>
    <p>Semester: <?php echo htmlspecialchars($semester); ?></p>
    <img src="photos/<?php echo htmlspecialchars($photoName); ?>" alt="Student Photo"><br><br>

    <!-- Display student marks and result -->
    <p>Subject 1: <?php echo htmlspecialchars($subject1); ?></p>
    <p>Subject 2: <?php echo htmlspecialchars($subject2); ?></p>
    <p>Subject 3: <?php echo htmlspecialchars($subject3); ?></p>
    <p>Subject 4: <?php echo htmlspecialchars($subject4); ?></p>
    <p>Subject 5: <?php echo htmlspecialchars($subject5); ?></p>

    <p>Total Marks: <?php echo htmlspecialchars($totalMarks); ?></p>
    <p>Average Marks: <?php echo htmlspecialchars($averageMarks); ?></p>

    
    <a href="index.php">Back to Form</a>

    echo "<script>location.href='index.php'</script>";
</body>
</html>
