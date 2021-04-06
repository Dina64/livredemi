<?PHP include('header.php'); ?>
		<section class="page-content text-center">
            <div class="container">
                <div class="row">
      <div class="signup-form">
        <form action="inserer.php" method="post" style="width: 200% ">
    		<h2>Register</h2>
    		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
            <div class="form-group">
    				<input type="text" class="form-control" name="name" id="first_name" placeholder="First Name" required="required">
    				 <div id="validatefirstName" style="display:none"><p style="color:#E00003;">First Name should be filled!</p></div>
    		</div>
    		<div class="form-group">
    				<input type="text" class="form-control" name="lastname" id="last_name" placeholder="Last Name" required="required">
    				 <div id="validatelastName" style="display:none"><p style="color:#E00003;">Last Name should be filled!</p></div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="adress" id="adress" placeholder="Adress" required="required">
                <div id="validateEmail" style="display:none"><p style="color:#E00003;">You have to enter Valid Adress</p></div>
            </div>
            <div class="form-group">
            	<input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
    			<div id="validateEmail" style="display:none"><p style="color:#E00003;">You have to enter Valid Email</p></div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="tel" id="tel" placeholder="Tel" required="required">
                <div id="validateEmail" style="display:none"><p style="color:#E00003;">You have to enter Valid tel</p></div>
            </div>
    		<div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="required">
    			<div id="validatePassword" style="display:none"><p style="color:#E00003;">Please enter Valid Password</p></div>
            </div>
    		<div class="form-group">
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required="required">
    			<div id="validateConPassword" style="display:none"><p style="color:#E00003;">Password is not match!</p></div>
            </div>
            <div class="form-group">
    			<label class="checkbox-inline"><input type="checkbox" name="chkpolicy" id="chkpolicy" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
    			<div id="validateConfirmPolicy" style="display:none">Please checked if agree </div>
    		</div>
    		<div class="form-group">
                <input type="submit" class="btn btn-success btn-lg btn-block" value="Register Now" name="submit"  id="formSubmit" ></input>
            </div>
        </form>
    	<a class="pad-right pad pad-bottom" href="login.php">Already have an account</a>
    </div>
            </div>
            </div>
    <div class="text-center" id="success"  style="display:none;">
        <h1 style="color:#6ABB4E;">Confirmation</h1>
        <p>Form submitted successfully. It's just for testing purpose, data not saved.</p>
    </div>
    	<script>
    		   function showDiv() {
    		   document.getElementById('success').style.display = "block";
    		   }
    		</script>

				</section>
<?PHP include('footer.php'); ?>