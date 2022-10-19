<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
      <div class="row">
    <div class="col-md-12">
	<form name="simple" onsubmit="return empty();" method="get" action="tampilan_data.php">
        <h1> Sign Up </h1>
        
        <fieldset>
          
          <legend>Your Profile</legend>
        
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
        
          <label for="email">Email:</label>
          <input type="email" id="mail" name="user_email">
       
          <label for="password">Password:</label>
          <input type="password" id="password"       name="user_password">
          
          <label for="date">Date:</label>
					<input type="date" name="bday">

        
          <label>Age:</label>
          <input type="radio" id="under_13" value="under_13" name="user_age"><label for="under_13" class="light">Under 13</label><br>
          <input type="radio" id="over_13" value="over_13" name="user_age"><label for="over_13" class="light">Over 13</label>
          
        </fieldset>
        <fieldset>  
          
         <label for="bio">Addres:</label>
          <textarea id="bio" name="user_bio"></textarea>
        
       
        Gender:
				<select id="selection" name="gender">
					<option>Gender</option>
					<option>Male</option>
					<option>Female</option>
				</select>
         
         </fieldset>
       
        <button type="submit">Sign Up</button>
        
       </form>
        </div>
      </div>
      
    </body>
</html>
