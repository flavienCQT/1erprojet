<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="main.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container" class="acceuil">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                // Code de vérification 
                ?>
            </form>
            <form action="pageInscription.php" method="POST">
                

                <input type="submit" id='submit' value='inscris toi' >
                <?php
                // Code de vérification 
                ?>
            </form>
        </div>
    </body>
</html>
