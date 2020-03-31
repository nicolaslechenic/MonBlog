
<?php

class CommentaireManager
{
    // Fonction appelée dans commenataireController.php
    static function createCommentaire(Commentaire $commentaire): Commentaire
    {
        // Pour créer un commentaire
        // On se connecte à la base de donnée
        $db = openConnexion();
        // On insére dans la table commentaire
        $request = "INSERT INTO commentaire (user_pseudo, creation_date, update_date, content, ref_page) VALUES ";

         // Getter est une méthode chargée de renvoyer la valeur d'un attribut ex: getUserPseudo voir Commentaire.php
        $request .= "( '" . $commentaire->getUserPseudo() . "', '" . $commentaire->getCreationDate() . "', '" . $commentaire->getUpdateDate() . "', '" . $commentaire->getContent() . "', '" . $commentaire->getRefPage() . "');";
        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute();

        $lastId = $db->lastInsertId();

        $commentaire->setId($lastId);
        $db = closeConnexion();

        return $commentaire;
    }


    // Fonction appelée dans pageController.php
    static function readCommentaires($pageName): array
    {
        // Pour lire un commentaire dans la bdd
        $db = openConnexion();
        // Après avoir tout sélectionné selectionné dans la table commentaire
        // On le stoocke dans un tableau
        $commentairesList = [];

        $request = "SELECT * FROM commentaire WHERE ref_page like'" . $pageName . "';" ;

        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute();

        //FETCH-ASSOC = mode de récupération de données qui retourne un tableau indéxé par colonne 
        //Ne permet pas d'appeler plusieurs colonnes du même nom

        while ($commentairesFromDb = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // On instancie Commenataire
            $commentaire = new Commentaire($commentairesFromDb['user_pseudo'],$commentairesFromDb['content'],$commentairesFromDb['ref_page']);
            $commentaire->setId($commentairesFromDb['id']);
            $commentaire->setCreationDate($commentairesFromDb['creation_date']);
            $commentaire->setUpdateDate($commentairesFromDb['update_date']);

            $commentairesList [] = $commentaire;
        }

        $db = closeConnexion();

        return $commentairesList;
    }

    static function updateCommentaire(Commentaire $commentaire): Commentaire
    {
        // Pour modifier un commenaitre
        $db = openConnexion();
        $request = "UPDATE commentaire SET ";
         // Getter est une méthode chargée de renvoyer la valeur d'un attribut ex: getUserPseudo voir Commentaire.php
        $request .= "content ='" . $commentaire->getContent() . "', ' update_date" . $commentaire->getUpdateDate() . "');";
        $request .= "WHERE id ='" . $commentaire->getId() . "');";
        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute();
        $db = closeConnexion();

        return $commentaire;
    }

    static function deleteCommentaire($commentaire): Commentaire
    {
        // Pour supprimer un commentaire
        $db = openConnexion();
        $request = "DELETE FROM commentaire WHERE id ='" . $commentaire->getId() . "'";
        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute();
        $db = closeConnexion();

        return $commentaire;
    }
}

