<!-- 
// if($_SERVER['REQUEST_METHOD'] == 'POST') {
// 	$name = $_POST['name'];
//   $age=$_POST['age'];
// 	$email = $_POST['email'];
// 	$password = $_POST['password'];
  
// 	// Connect to database
// 	$conn = mysqli_connect('localhost', 'root','', 'logindb');

// 	// Check if email already exists
// 	$sql = "SELECT * FROM users WHERE email = '$email'";
// 	$result = mysqli_query($conn, $sql);

// 	if(mysqli_num_rows($result) > 0) {
// 		echo "Email already exists";
// 	} else {
// 		// Add user to database
// 		$sql = "INSERT INTO users (name, email, password) VALUES ('$name','$age', '$email', '$password')";
// 		if(mysqli_query($conn, $sql)) {
// 			echo "Signup successful";
// 			header('Location: login.php');
// 		} else {
// 			echo "Error: " . mysqli_error($conn);
// 		}
// 	}

// 	mysqli_close($conn);
// }
//<  -->
<!-- // <!DOCTYPE html>
// <html>
//   <head>
//     <meta charset="UTF-8">
//     <title>Signup Form</title>
//     <link rel="stylesheet" href="css/ownersignup.css">
//   </head>
//   <body>
    
//     <button id="signupButton">Signup</button>
//     <div id="signupFormWrapper">-->
<!-- //       <div id="signupForm">
//         <h2>Signup</h2>
//         <form>
//           <label for="nameInput">Name:</label>
//           <input type="text" id="nameInput" placeholder="Enter your name">

//           <label for="ageInput">Age:</label>
//           <input type="number" id="ageInput" placeholder="Enter your age">

//           <label for="genderSelect">Email</label> -->
          <!--<select id="genderSelect"> -->
            <!-- <option value="">Select your gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select> --> 
        
          <!-- <label for="email" >Email</label>
            <input type="email" id="emailI" name="email" required placeholder="Enter your email address">

          <label for="password">Password</label>
            <input type="password" id="passwordI" name="password" required placeholder="Enter your password">
          </div>
          <div class="signup-link-container">
            Already an account? <a href="owner.html" class="signup-link">LOGIN</a>
          </div>
          
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
    <script src="sign.js"></script>
  </body>
</html> -->
 
<!--* new updated code
-->

<!-- /*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'logindb');

    // Check if email already exists
    $email = mysqli_real_escape_string($conn, $email);
    $sql = "SELECT * FROM username WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Email already exists";
    } else {
        // Add user to database
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $name = mysqli_real_escape_string($conn, $name);
        $age = mysqli_real_escape_string($conn, $age);

        $sql = "INSERT INTO username (name, age, email, password) VALUES ('$name', '$age', '$email', '$password_hash')";
        if (mysqli_query($conn, $sql)) {
            echo "Signup successful";
            header('Location: owner.php');
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}*/ -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Signup Form</title>
        <link rel="stylesheet" href="css/ownersignup.css">
    </head>
    <body>

        <div id="signupForm">
            <h2>Signup</h2>
            <form method="POST">
                <label for="nameInput">Name:</label>
                <input type="text" id="nameInput" name="name" placeholder="Enter your name" required>

                <label for="ageInput">Age:</label>
                <input type="number" id="ageInput" name="age" placeholder="Enter your age" required>

                <label for="emailInput">Email:</label>
                <input type="email" id="emailInput" name="email" placeholder="Enter your email address" required>

                <label for="passwordInput">Password:</label>
                <input type="password" id="passwordInput" name="password" placeholder="Enter your password" required>

           
                <div class="signup-link-container">
                    Already have an account? <a href="owner.php" class="signup-link">Login</a>
                </div>

                <input type="submit" value="Submit">
            </form>
        </div>

        <script src="sign.js"></script>
    </body>
</html>