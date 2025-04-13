<!DOCTYPE html>
<html>
<head>
    <title>Job Application Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 600px; margin: 0 auto; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], 
        input[type="email"], 
        textarea, 
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }
        button { padding: 10px 20px; background: #f0f0f0; border: 1px solid #666; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Job Application Form</h2>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Simulated form processing
            $name = $_POST['name'];
            $email = $_POST['email'];
            $position = $_POST['position'];
            $cover_letter = $_POST['cover_letter'];
            $resume_name = $_FILES['resume']['name'];
            
            echo "<p>Application submitted successfully! (Simulated)</p>";
            echo "<p>Name: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Position: $position</p>";
            if ($resume_name) {
                echo "<p>Resume: $resume_name (simulated upload)</p>";
            }
        }
        ?>

        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" id="position" name="position" required>
            </div>

            <div class="form-group">
                <label for="resume">Resume (PDF only):</label>
                <input type="file" id="resume" name="resume" accept=".pdf" required>
            </div>

            <div class="form-group">
                <label for="cover_letter">Cover Letter:</label>
                <textarea id="cover_letter" name="cover_letter" rows="5"></textarea>
            </div>

            <button type="submit">Submit Application</button>
        </form>
    </div>
</body>
</html>