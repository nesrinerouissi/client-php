
	<div class="container">
  <div class="login-box">
    <h1>S'IDENTIFIER</h1>
    <form name="login" method="post" action="index.php?controller=client&action=login">
      <div class="txt-field">
        <input type="text"  name="email" required id="email" />
        <span></span>
        <label for="email">Email</label>
      </div>
      <div class="txt-field">
        <input type="password"  id="password" name="password" required />
        <span></span>
        <label for="password">Password</label>
      </div>
      <div class="pass">Forgot Password?</div>
      <input type="submit" value="Login">
      <div class="signup-link">Not a member yet? <a href="index.php?controller=client&action=signUp">Sign Up</a></div>
    </form>
	<?php if(isset($error)) echo "<div class='error'>$error</div>"; ?>
  </div>
</div>
