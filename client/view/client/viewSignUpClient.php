
<form class="add-client-form" method="POST" action="index.php?controller=client&action=signedUp">

  <fieldset>
     <legend>S'INSCRIRE </legend> 
	 
     <div class="txt-field">
				<input type="text" placeholder="First Name" name="firstName" required id="firstName" />
				<span></span>
				<label for="firstName"></label>
			</div>
			<div class="txt-field">
				<input type="text" placeholder="Last Name" name="lastName" required id="lastName" />
				<span></span>
				<label for="lastName"></label>
			</div>

			<div class="txt-field">
				<input type="email" placeholder="Email" name="email" required id="email" />
				<span></span>
				<label for="email"></label>
			</div>
			<div class="txt-field">
				<input type="password" placeholder="Password" id="password" name="password" required />
				<span></span>
				<label for="password"></label>
			</div>
			<div class="txt-field">
				<input type="text" placeholder="Address" name="address" required id="address" />
				<span></span>
				<label for="address"></label>
			</div>
			<div class="txt-field">
				<input type="tel" placeholder="Phone" name="phone" required id="phone" />
				<span></span>
				<label for="phone"></label>
			</div>
			<div class="txt-field">
				<input type="date" placeholder="Birth Date" name="birthDate" required id="birthDate" />
				<span></span>
				<label for="birthDate"></label>
			</div>
	 <p>
     <input type="submit" value="Envoyer" /> 
	 </p>

   </fieldset> 
</form>






