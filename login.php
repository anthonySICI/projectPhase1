<!doctype html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
  <div id="wrapper">
	<header>
		<h1>LOGIN</h1>
	</header>
	<main>
    <form id='login' action='doLogin.php' method='post' accept-charset='UTF-8'>
      <fieldset >
        <input type='hidden' name='submitted' id='submitted' value='1'/>
 
        <label for='username' >Username:</label>
        <input type='text' name='username' id='username'  maxlength="50" />
 
        <label for='password' >Password:</label>
        <input type='password' name='password' id='password' maxlength="50" />
 
        <input type='submit' name='Submit' value='Acceder' />
        
      </fieldset>
    </form>
  </main>
	<footer>Universidad de Puerto Rico de Ponce</footer>
	</div>
</body>
</html>