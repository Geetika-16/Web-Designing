<?php include ("head.html")
?>
<body>
    <div class="register">
        <div class="con">
            <form action="connect.php" method="post">
                <label for="username">USERNAME: </label>
                <input type="text" size="30" name="n" placeholder="Enter you username" required/><br><br>
                <label for="age">AGE: </label>
                <input type="number" size="3" name="a" placeholder="Optional" /><br><br>
                <label for="gender">GENDER: </label>
                <input type="radio" name="g" value="male"/> Male 
                <input type="radio" name="g" value="female"/> Female
                <input type="radio" name="g" value="other"/> Others <br><br>
                <label for="email">EMAIL: </label>
                <input type="email" size="30" name="e" placeholder="Enter yor email address" /><br><br>
                <label for="password">PASSWORD: </label>
                <input type="password" size="30" maxlength="10" minlength="5" name="p" placeholder="Enter your password" required/><br><br>
                <label for="mobile">MOBILE: </label>
                <input type="text" size="10" name="m" placeholder="Enter your mobile number" /><br><br>
                <label for="dob">DOB: </label>
                <input type="date" name="dob"/><br><br>
                <label for="dept">DEPARTMENT: </label>
                <select name="s">
                    <option value="IT">IT</option>
                    <option value="HR">HR</option>
                    <option value="Finance">Finance</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Sales">Sales</option>
                    <option value="Operations">Operations</option>
                    <option value="Legal">Legal</option>
                    <option value="Admin">Admin</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Customer Service">Customer Service</option>
                    <option value="Support">Support</option>
                </select><br><br>
                <button type="submit">REGISTER</button>
                <button type="reset">CANCEL</button>
            </form>
        </div>
    </div>
</body>
<?php include("foot.html")
?>
