<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>DADA NOOB</title>
    </head>
    
    <body>
        <header id="headingTitle">
            <h1>Vapour</h1>
        </header>

        <header id="headingHome">
            <h3 id="headingText">Login</h3>
            <!-- <form action="home.php" method="get">
                <input type="image" value="submit" src="logout.png" alt="submit Button" onMouseOver="this.src='logout.png'" id="logoutButton">
            </form> -->
        </header>

        <form action="login.php" method="POST">
                <input type="text" name="username" placeholder="Username" id="form_input_field" required="true" maxlength="100">     
                <input type="password" name="password" placeholder="Password" id="form_input_field" required="true" maxlength="32"> 
                <input type="submit" value="Login" name="submit" id="button1">    
        </form>

        <form action="addUser.php" method="get">
            <input type="submit" value="New User?" name="submit" id="button1"/>
        </form>


        

        <footer> This webpage was made by the best CS 353 group. </footer>

    </body>
</html>