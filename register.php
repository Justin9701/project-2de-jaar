<?php
// Include header file
include "header.php"; 

// Define variables and initialize with empty values
$username = $password = $confirm_password = $firstname = $lastname = $address = $email = $number = $birthdate = "";
$username_err = $password_err = $confirm_password_err = $firstname_err = $lastname_err = $address_err = $email_err = $number_err = $birthdate_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
     // Validate firstname
     if(empty(trim($_POST["firstname"]))){
        $firstname_err = "Please enter your first name.";
    } else{
        $firstname = trim($_POST["firstname"]);
    }

    // Validate lastname
    if(empty(trim($_POST["lastname"]))){
        $lastname_err = "Please enter your last name.";
    } else{
        $lastname = trim($_POST["lastname"]);
    }

    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter your email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Validate address
    if(empty(trim($_POST["address"]))){
        $address_err = "Please enter your address.";
    } else{
        $address = trim($_POST["address"]);
    }
    
    // Validate number
    if(empty(trim($_POST["number"]))){
        $number_err = "Please enter your phone number.";
    } else{
        $number = trim($_POST["number"]);
    }
    
    // Validate birthdate
    if(empty(trim($_POST["birthdate"]))){
        $birthdate_err = "Please enter your birthdate.";
    } else{
        $birthdate = trim($_POST["birthdate"]);
    }
    
        
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
        
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($firstname_err) && empty($lastname_err) && empty($address_err) && empty($email_err) && empty($number_err) && empty($birthdate_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (firstname, lastname, username, email, address, number, birthdate, password) 
        VALUES ( :firstname, :lastname, :username, :email, :address, :number, :birthdate, :password)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssss", $param_firstname, $param_lastname, $param_username, $param_email, $param_address, $param_number, $param_birthdate, $param_password);


            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_firstname = $firstname;
            $param_lastname = $lastname;
            $param_address = $address;
            $param_email = $email;
            $param_number = $number;
            $param_birthdate = $birthdate;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

    <main>
        <section class="register-section">
            <h2>Registreren</h2>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="registerForm">
                <label for="firstname">Voornaam:</label>
                <input type="text" id="firstname" name="firstname" class="form-control <?php echo (!empty($firstname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $firstname; ?>">
                <span class="invalid-feedback"><?php echo $firstname_err; ?></span>

                <label for="lastname">Achternaam:</label>
                <input type="text" id="lastname" name="lastname" class="form-control <?php echo (!empty($lastname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $lastname; ?>">
                <span class="invalid-feedback"><?php echo $lastname_err; ?></span>

                <label for="username">Gebruikersnaam:</label>
                <input type="text" id="username" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>

                <label for="email">E-mailadres:</label>
                <input type="email" id="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>

                <label for="address">Adres:</label>
                <input type="text" id="address" name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $address; ?>">
                <span class="invalid-feedback"><?php echo $address_err; ?></span>

                <label for="number">Telefoonnummer:</label>
                <input type="tel" id="number" name="number" class="form-control <?php echo (!empty($number_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $number; ?>">
                <span class="invalid-feedback"><?php echo $number_err; ?></span>

                <label for="birthdate">Geboortedatum:</label>
                <input type="date" id="birthdate" name="birthdate" class="form-control <?php echo (!empty($birthdate_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $birthdate; ?>">
                <span class="invalid-feedback"><?php echo $birthdate_err; ?></span>

                <label for="password">Wachtwoord:</label>
                <input type="password" id="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
 
                <label for="confirm-password">Bevestig Wachtwoord:</label>
                <input type="password" id="confirm-password" name="confirm-password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>

                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </form>
        </section>
    </main>

    <footer>
        <p>Contactinformatie: info@coralyachts.com</p>
    </footer>

    <script>
        document.getElementById("registerForm").addEventListener("submit", function (event) {
            event.preventDefault();

            let formData = new FormData(event.target);

            alert('Voornaam: ' + formData.get('firstname') + '\n' +
                'Achternaam: ' + formData.get('lastname') + '\n' +
                'Gebruikersnaam: ' + formData.get('username') + '\n' +
                'E-mailadres: ' + formData.get('email') + '\n' +
                'Adres: ' + formData.get('address') + '\n' +
                'Telefoonnummer: ' + formData.get('number') + '\n' +
                'Geboortedatum: ' + formData.get('birthdate') + '\n' +
                'Wachtwoord: ' + formData.get('password') + '\n' +
                'Bevestigd Wachtwoord: ' + formData.get('confirm-password'));
        });
    </script>

</body>

</html>