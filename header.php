<?php
session_start();
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farstrup Furniture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="header-background"></div>
        <div class="container-fluid">
            <a class="navbar-brand" href="galleri.php"><img src="images/logo-2-300x60.png" width="150"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" style="color:#A5A5A5;" aria-current="page" href="index.php">Kollektion</a>
                    </li>
                </ul>

                <div>
                    <?php
                    $count = 0;
                    if (isset($_SESSION['kurv'])) {
                        $count = count($_SESSION['kurv']);
                    }
                    ?>
                    <a href="kurv.php" style="color:#A5A5A5;" class="btn btn-outline-succes"> Kurv(<?php echo $count; ?>)</a>
                </div>

            </div>
        </div>
    </nav>

</body>


</html>