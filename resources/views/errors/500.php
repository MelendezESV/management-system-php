<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style.css">
    <title>500</title>
</head>
<body class="page-error">
    <div class="main-container-error">
        <div class="sub-container-01-error">
            <img class="image-error" src="../../public/img/500.png" alt="">
        </div>
        <div class="sub-container-02-error">
            <h2>Internal Server Error</h2>
            <p>
                <?php
                    if (isset($dbErrorCode)) {
                        echo 'We\'re sorry, but an internal server error occurred, Error Code: ' . $dbErrorCode .'.';
                    }else {
                        echo "We're sorry, but there was an internal server error, please contact support.";
                    }
                ?>
            </p>
        </div>
    </div>
</body>
</html>