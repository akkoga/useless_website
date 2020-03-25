<?php

$pageContent = <<< EOPAGE
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit-icons.min.js"></script>
    <title>Useless</title>
</head>
<body>
    <h1 class="uk-heading-line uk-text-center uk-heading-medium"><span>Copy and paste</span></h1>
    <div class="uk-width-1-3 uk-align-center">
        <div>
            <label for="textCopy">Text copy</label>
            <div class="uk-flex uk-flex-stretch">
                <input class="uk-input" type="text" placeholder="click on copy button" id="textCopy">
            </div>
        </div>

        <div class="uk-margin-medium-top">
            <label for="textPaste" >Text paste</label>
            <div class="uk-flex uk-flex-stretch">
                <input class="uk-input" type="text" placeholder="click on paste button" id="textPaste" disabled>
            </div>
        </div>
    </div>

    <div class="uk-width-1-3 uk-align-center">
        <button class="uk-button uk-button-default uk-margin-left" id="copy" onclick="copy()">Copy</button>
        <button class="uk-button uk-button-default uk-margin-left" id="paste" >Paste</button>
    </div>

</body>
<script src="copyPaste.js"></script>
</html>
EOPAGE;
echo $pageContent;
