<?php
/**
 * Pre-set des fichiers configurations
 */
require_once('required/config.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $config['start_title'];?></title>
        <link rel="shortcut icon" type="image/png" href="<?php echo $config['favicon']; ?>"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    </head>
    <body class="d-flex flex-column min-vh-100">
    <?php
    /**
     * Nécessite un authentification
     */
    include('vue/V_nav.php');

    if(!isset($_REQUEST["auth"])){
        $_REQUEST['auth'] = 'null';
    }
    
    $auth = htmlspecialchars($_REQUEST["auth"]);
    switch($auth){
        case 'require_auth':
            break;
        case 'avis':
            break;
        case 'startdevtours':
            include('vue/pages/V_Startdevtours.php');
            break;
        case 'barecautomatisme':
            include('vue/pages/V_barecautomatisme.php');
            break;
        case 'stageWabtec':
            include('vue/pages/V_stageWabtec.php');
            break;
        case 'certification':
            include('vue/pages/V_certifications.php');
            break;
        case  'btssio':
            include('vue/pages/V_btssio.php');
            break;
        case 'epreuves':
            include('vue/pages/V_epreuves.php');
            break;
        case 'credits':
            include('vue/pages/V_credit.php');
            break;
        case 'null':
            include('vue/V_accueil.php');
        default:
            break;
    }
    ?>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <?php /**FOOTER POSITION */ include('vue/V_footer.php'); ?>
    </body>
</html>