<?php
/** 
 * Classe d'accès à la base de données.
 */
class Pdo_Connexion_bd {

    private static $strServeur = 'mysql:host=';
    private static $strBdd = 'dbname=';
    private static $strUser = '';
    private static $strMdp = '';
    private static $objPdo;
    private static $objPdoConnexion = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct() {
        try {
            Pdo_Connexion_bd::$objPdo = new PDO(Pdo_Connexion_bd::$strServeur . ';' 
                    . Pdo_Connexion_bd::$strBdd, Pdo_Connexion_bd::$strUser, Pdo_Connexion_bd::$strMdp);
            Pdo_Connexion_bd::$objPdo->query("SET CHARACTER SET utf8");
            Pdo_Connexion_bd::$objPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo 'Echec lors de la connexion ! ' . $e->getMessage();
            die();
        }
    }

    /**
     * destructeur de la classe
     */
    public function __destruct() {
        Pdo_Connexion_bd::$objPdo = null;
    }

    /**
     * Fonction statique qui crée l'unique instance de la classe
     * @return l'objet objPdo de la classe PdoConnexion
     */
    public static function getPdoConnexion() {
        if (Pdo_Connexion_bd::$objPdoConnexion == null) {
            Pdo_Connexion_bd::$objPdoConnexion = new Pdo_Connexion_bd();
        }
        return Pdo_Connexion_bd::$objPdo;
    }

}
