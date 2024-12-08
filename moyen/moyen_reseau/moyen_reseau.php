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
            Connectez-vous à un serveur avec l'adresse IP 176.129.192.118 et le port 12345 en ouvrant une socket.<br>
            Recevez des données du serveur et prenez le flag.
        </p>
    </div>

    <div id="answer">
        <form id="flagform" method="POST">
            <label for="inputstring" id="drapeau">Drapeau</label>
            <input type="text" id="inputflag" name="inputflag_reseau" placeholder="CTF_X_Y_{....}" />
            <input type="submit" id="submit" value="Soumettre" />
        </form>
        <div id="result"></div>
    </div>
    <script src="./moyen_reseau.js"></script>
</body>

</html>