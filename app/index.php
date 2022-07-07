<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        label{
            width : 20%;
            display : inline-block;
            text-align : left;
        }
        body{ 
            width : 50%;
            font-family : arial;
            margin : 5% auto;
            background-image : url(power.jpg);
            padding : 20px;
            color : #1abc9c;
        }
        fieldset{
            border-radius : 8px;
        }
        legend{
            font-size : 1.4em;
            margin-bottom : 10px;

        }
        input[type="text"], input[type="number"], input[type="email"]
        {
            border-radius : 5px;
            padding : 10px;
            width : 70%;
            background-color : #ffff;
            margin : 10px;
        }
        input[type="submit"]
        {
            position: relative;
            padding : 20px;
            font-size : 18px;
            border : 1px solid #16aO85m
            border-radius : 2px;
            margin-top : 10px;
            width: 100%;
            font-size : 18px;
            font-style : bold;
            color : #000;
        }
        ul{
            list-style-type : none;
            padding : 20px;
            overflow : hidden;
            margin : 10px;
            background-color : #333;
        }
        li
        {
            display : inline;
            padding : 10px;
            margin : 20px;
        }
        li a
        {
            color : white;
            padding: 20px;
            margin : 20px;
        }
    </style>
</head>
<body>
    <h1>BIENVENUE SUR LE SITE DU GROUPE 1</h1>
    <header>
        <nav>
            <ul>
                <li><a href="Presentation.html">Présentation</a></li>
                <li><a href="site.php">Consultez le calendrier</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <form action="">
        <fieldset>
            <legend>Inscription</legend>
            <label for="">Nom</label><input type="text" placeholder="Entrez votre nom ici"><br>
            <label for="">Prénom</label><input type="text" placeholder="Entrez votre prénom ici"><br>
            <label for="">Numéro</label><input type="number" placeholder="Entrez votre numéro ici"><br>
            <label for="">Email</label><input type="email" placeholder="Entrez votre mail ici"><br>
            <label for="">Sexe</label><input type="radio" name="gender" value="Homme">Homme<input type="radio" name="gender" value="Femme">Femme <br>
            <input type="submit" value="valider">
        </fieldset>
    </form>
   
    
</body>
</html>