<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= NOMEAPP ?></title>
    <link rel="shortcut icon" href="<?= URLBASE ?>/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= URLBASE ?>/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URLBASE ?>/public/assets/css/azzara.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

    <script src="<?= URLBASE ?>/public/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Open+Sans:300,400,600,700"]},
            custom: {"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
            urls: ['<?= URLBASE ?>/public/assets/css/fonts.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
</head>
<body>
