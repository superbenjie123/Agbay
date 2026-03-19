<?php
    include 'views/header.php';
    
?>
        <div class="register-form">
            
            <form action="models/register_account.php" method="POST">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="bruce@gmail.com">
                <label for="firstname">First name</label>
                <input type="text" id="firstname" name="firstname" placeholder="Bruce"
                <label for="lastname">Last name</label>
                <input type="text" id="lastname" name="lastname" placeholder="Wayne">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="******">
                <label for="cpassword">Confirm Password</label>
                <input type="password" id="cpassword" name="cpassword" placeholder="******">
                <input type="submit" value="Signup">
            </form>
        </div>
<?phpinclude 'views/footer.php';
                
            
    
