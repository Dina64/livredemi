<?PHP include('header.php'); ?>
		<section class="page-content">
			<div class="wrapperme fadeInDown">
		  <div id="formContent">
		    <!-- Tabs Titles -->

		    <!-- Icon -->
		    <div class=" loginfirst fadeIn first">
		      <h1>Login</h1>
		    </div>

		    <!-- Login Form -->
		    <form>
		      <input type="text" id="login" class="fadeIn second inputme" name="login" placeholder="User Name">
			  <div id="validateUser" style="display:none"><p style="color:#E00003;">Enter valid user Name</p></div>
		      <input type="password" id="password" class="fadeIn third inputme" name="login"  placeholder="Password">
			  <div id="validatePassword" style="display:none"><p  style="color:#E00003;">Enter valid Password</p></div>
		      <input type="button" onclick="validateLogin();" id="formSubmit" class="fadeIn fourth inputmee " value="Log In" >
		    </form>

		    <!-- Remind Passowrd -->
		    <div id="formFooter">
		      <a class="underlineHover" href="forget.html">Forgot Password?</a>
			  <a class="underlineHover" href="register.html">I don't have an account</a>
		    </div>

		  </div>
		</div>
     </section>
<?PHP include('footer.php'); ?>