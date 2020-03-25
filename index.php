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
    <h1 class="uk-heading-line uk-text-center uk-heading-medium"><span>Useless website</span></h1>

    <div class="uk-flex uk-flex-center uk-margin-medium-top">
    <div class="uk-card uk-card-default uk-card-body"><a href="www/copypaste/copyPaste.php">Copy and Paste</a></div>
    <div class="uk-card uk-card-default uk-card-body uk-margin-left">Item 2</div>
    <div class="uk-card uk-card-default uk-card-body uk-margin-left">Item 3</div>
    </div>
    
</body>
</html>
EOPAGE;
echo $pageContent;
