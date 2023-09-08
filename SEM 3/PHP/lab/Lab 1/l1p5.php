<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Registration Form</h1>

    <form>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="branch">Branch:</label><br>
        <input type="text" id="branch" name="branch"><br><br>
        <label for="semester">Semester:</label><br>
        <input type="number" id="semester" name="semester"><br><br>
        <label for="roll-number">Roll Number:</label><br>
        <input type="text" id="roll-number" name="roll-number"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <label for="contact-number">Contact Number:</label><br>
        <input type="tel" id="contact-number" name="contact-number"><br><br>
        <label for="subject-of-interest">Subject of Interest:</label><br>
        <select id="subject-of-interest" name="subject-of-interest">
            <option value="">--Please choose an option--</option>
            <option value="cultural">Cultural</option>
            <option value="web-publishing">Web Publishing</option>
            <option value="technical">Technical</option>
            <option value="finance">Finance</option>
            <option value="publication">Publication</option>
            <option value="reception-and-hosting">Reception and Hosting</option>
        </select><br><br>
        <label for="signature">Signature:</label><br>
        <input type="text" id="signature" name="signature"><br><br>
        <label for="past-experience">Past Experience:</label><br>
        <textarea id="past-experience" name="past-experience"></textarea><br><br>
        <input type="submit" value="Submit">
    </form> 
</body>
</html>
