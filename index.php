<?php
// Define variables for dynamic content
$pageTitle = "Lora World";
$studentName = "Lora, Dave Nooxonn R.";
$courseSection = "BSIT - IT3R2";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            border-top: 5px solid #4a90e2;
            width: 300px;
        }
        h1 {
            color: #333333;
            margin-bottom: 20px;
            font-size: 24px;
        }
        .info {
            color: #555555;
            font-size: 16px;
            margin: 8px 0;
            display: block;
        }
        .info.course {
            font-weight: bold;
            color: #4a90e2;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1><?php echo $pageTitle; ?></h1>
        <span class="info"><?php echo $studentName; ?></span>
        <br>
        <span class="info course"><?php echo $courseSection; ?></span>
    </div>

</body>
</html>
