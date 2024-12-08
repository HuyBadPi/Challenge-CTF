<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./../styles.css" />

    <title>Document</title>
</head>

<body>
    <div id="logo">
        INSA CTF
        <img src="./../../logo.jpg" alt="" id="logoimage" />
    </div>
    <div id="description">
        <h1>Description</h1>
        <style>
            p {
                line-height: 1.6;
                font-size: 20px;
            }

            a {
                text-decoration: none;
                color: blue;
            }
        </style>
        <p>
            Bonjour, mes amis !!! <br>
            Je suis Emma sb. Vous pouvez trouver mon profil Facebook, et dans mon Facebook, vous découvrirez des
            informations précieuses pour trouver le flag. <br>
            J'ai aussi partagé ma photo de profil sur GitHub :
            <a href="./../../defi/moyen_osint/image.jpg" download>Téléchargez l'image
                ici</a> <br>
            Et parce que je suis très gentille, je vous donne un indice :) <br>
            Pensez à ajouter 1 à la première partie. <br>
            Bon courage et bonne chance ! <br>
        </p>
    </div>

    <div id="answer">
        <form id="flagform" method="POST">
            <label for="inputstring" id="drapeau">Drapeau</label>
            <input type="text" id="inputflag" name="inputflag_osint" placeholder="CTF_X_Y_{....}" />
            <input type="submit" id="submit" value="Soumettre" />
        </form>
        <div id="result"></div>
    </div>
    <script src="./moyen_osint.js"></script>
</body>

</html>