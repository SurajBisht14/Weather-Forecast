<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Whirl</title>
    <link rel="stylesheet" href="signUp.css">
    <link rel="stylesheet" href="newNav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <style>
        .main {
            position: relative; /* Ensure relative positioning for alert */
        }

        .alert-container {
            width: 100%;
            height: 5%; /* Adjusted height */
            padding-top: 10px; /* Added padding top */
            margin-bottom: 20px; /* Add margin to separate it from other content */
            display: none; /* Initially hide the alert */
            position: absolute; /* Position the alert absolutely */
            top: 0; /* Position at the top of the main container */
            left: 0; /* Align to the left of the main container */
            text-align: center;
            transition: opacity 0.5s; /* Add transition for opacity change */
        }

        .alert-success {
            background-color: #d4edda; /* Green color for success */
            color: #155724; /* Dark green text color for success */
        }

        .alert-error {
            background-color: #f8d7da; /* Red color for error */
            color: #721c24; /* Dark red text color for error */
        }

        .container {
            position: relative; /* Ensure relative positioning */
            z-index: 1; /* Ensure the content stays above the alert */
        }
    </style>
</head>
<body>
    <?php session_start(); ?>
    <?php include 'newNav.php'; ?>

    <!-- Making Sql connection  -->
    <?php include 'formSignIn.php';?>

    <div class="main">
        <div class="alert-container">
            <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['username']; 
                $email = $_POST['email']; 
                $password= $_POST['password'];

                $query1= mysqli_query($connection,"select * from data where email='$email'");
                $result1 = mysqli_num_rows($query1);

                // Checking if data already exist or not
                if($result1>0){
                    // Display alert if username or email already exist
                    echo "<strong>Error:</strong> Username or Email already exist";
                    echo "<script>document.querySelector('.alert-container').classList.add('alert-error');</script>"; // Add error class
                }
                 else {
                    $query2 = "insert into data (username,email,password) values ('$username','$email','$password')";    
                    $result2 = mysqli_query($connection, $query2);

                    if ($result2) {
                        // Display success alert if sign up is successful
                        echo "<strong>Success:</strong> Sign Up is successfully done";
                        echo "<script>document.querySelector('.alert-container').classList.add('alert-success');</script>"; // Add success class
                    } else {
                        echo "<script>console.error('Error: " . mysqli_error($connection) . "');</script>";
                    }
                }
            }
            ?>
        </div>

        <div class="container">
            <h2>Sign Up</h2>
            <form action="" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <input type="submit" value="Sign Up" id="submit">
            </form>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="newNav.js"></script>
    <script>
        // Show the alert container when there's an error or success
        document.addEventListener('DOMContentLoaded', function() {
            var alertContainer = document.querySelector('.alert-container');
            if (alertContainer) {
                alertContainer.style.display = 'block';
                setTimeout(function() {
                    alertContainer.style.opacity = '0';
                    setTimeout(function() {
                        alertContainer.remove();
                    }, 500); // Wait for transition to end before removing the alert
                }, 2000); // Show the alert for 2 seconds
            }
        });
    </script>
</body>
</html>
