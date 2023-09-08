<!-- 
Design a user registration form in HTML for a social media platform. Required
information is First Name, Middle Name, Last Name, Address, Email, Mobile Number,
description. On submission of form display the information submitted in form of the GET
request.
Hint: Use javascript to extract information. Analyze the problem if any of the information
 -->

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
    <form id="registration-form">
        First Name:
        <input type="text" id="first-name" name="first-name"><br><br>
        <label for="middle-name">Middle Name:</label><br>
        <input type="text" id="middle-name" name="middle-name"><br><br>
        <label for="last-name">Last Name:</label><br>
        <input type="text" id="last-name" name="last-name"><br><br>
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <label for="mobile-number">Mobile Number:</label><br>
        <input type="tel" id="mobile-number" name="mobile-number"><br><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br><br>
        <input type="submit" value="Submit">
    </form> 

    <script>
        const form = document.getElementById('registration-form');
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            const formData = new FormData(form);
            const data = Object.fromEntries(formData);
            console.log(data);
        }); 


    </script>
