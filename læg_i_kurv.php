<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['tilføj_til_kurv'])) {
        if (isset($_SESSION['kurv'])) {

            $minkurv = array_column($_SESSION['kurv'], "produkt_navn");
            if (in_array($_POST["produkt_navn"], $minkurv)) {

                echo "<script>
                    alert('Varen er allerede tilføjet til kurven');
                    window.location.href='index.php';
                </script>";
            } else {


                $count = count($_SESSION['kurv']);
                $_SESSION['kurv'][$count] = array("produkt_navn" => $_POST["produkt_navn"], 'pris' => $_POST['pris'], 'antal' => 1);
                echo "<script>
                    alert('Vare tilføjet til kurven');
                    window.location.href='index.php';
                </script>";
            }
        } else {
            $_SESSION['kurv'][0] = array("produkt_navn" => $_POST["produkt_navn"], 'pris' => $_POST['pris'], 'antal' => 1);

            echo "<script>
                    alert('Vare tilføjet til kurven');
                    window.location.href='index.php';
                </script>";
        }
    }
}
