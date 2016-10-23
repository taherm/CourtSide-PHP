<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Admin Login Form</title>
    
    
    
    
        <link rel="stylesheet" href="css1/style.css">

    
    
    
  </head>

  <body>

    <!--Google Font - Work Sans-->
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css1'>

<div class="container">
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
     <img src="https://pbs.twimg.com/profile_images/554631714970955776/uzPxPPtr.jpeg" alt="Avatar" /> 
    </button>
    <div class="profile__form">
      <div class="profile__fields">
        <div class="field">
		<form action="adminlogin.php" method="post">
          <input type="text" id="fieldUser"name="em" class="input" required pattern=.*\S.* />
          <label for="fieldUser" class="label">Username</label>
        </div>
        <div class="field">
          <input type="password" id="fieldPassword" name="pwd"class="input" required pattern=.*\S.* />
          <label for="fieldPassword" class="label">Password</label>
        </div>
        <div class="profile__footer">
          <input type="submit" class="btn" value="Login">
		  </form>
        </div>
      </div>
     </div>
  </div>
</div>
    
        <script src="js1/index.js"></script>

    
    
    
  </body>
</html>
