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

            strong {
                color: #32CD32;
                margin-left: 40px;
            }
        </style>

        <p>
            <!-- J'ai écrit un programme Python pour crypter une chaîne. J'ai accidentellement supprimé la chaîne
            d'origine.<br>
            Heureusement, j'ai enregistré la chaîne cryptée. S'il vous plaît, aidez-moi à retrouver la chaîne d'origine. -->
            Bonjour mes amis dans Crypto Facile !<br>
            Voici le code binaire : <strong>
                10001100011000111111111011100100011010011110111000110010000101111101110000110010</strong> <br>
            Et la clé : <strong>1101010100101100101010111100010000101101101001110111011000110111100101010110011</strong>
            <br>
            { Pensez bien. Parfois, les solutions viennent en ajoutant les bonnes clés aux bons moments... } <br>
            Il est facile ! Bon courage ! <br>
        </p>
        <!-- <a href="./../../defi/facile_crypto/challenge.py" download
            style="text-decoration: none; text-align: center; display: block; width: 100%; font-weight: bold; font-size: 20px;">challenge.py</a> -->
    </div>

    <div id="answer">
        <form id="flagform" method="POST">
            <label for="inputstring" id="drapeau">Drapeau</label>
            <input type="text" id="inputflag" name="inputflag_crypto" placeholder="CTF_X_Y_{....}" />
            <input type="submit" id="submit" value="Soumettre" />
        </form>
        <div id="result"></div>
    </div>
    <script src="./facile_crypto.js"></script>
</body>

</html>