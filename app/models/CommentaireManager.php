<?php
/*
                                | -----------------------------CLASS COMMENTAIREMANAGER---------------------------- | 
                                |                                                                                   |
                                |                             1/ Fonction createACommentaire                        |
                                |                             2/ Fonction readCommentaires                          |
                                |                             3/ Fonction updateCommentaire                         |
                                |                             6/ Fonction deleteCommentaire                         |                                
                                |                                                                                   |
                                |-----------------------------------------------------------------------------------|
*/


class CommentaireManager{


//                              |--------------------------- 1/ Fonction createCommentaire -----------------------------|



// Fonction créer un commentaire via la class Commentaire
    static function createCommentaire(Commentaire $commentaire): Commentaire
    {
        // Pour créer un commentaire
        // On se connecte à la base de donnée
        $db = openConnexion();

        // On insére dans la table commentaire le pseudo, la date de création, la date de mise à jour, la ref_page
        $request = "INSERT INTO commentaire (user_pseudo, creation_date, update_date, content, ref_page) VALUES ";
        $request .= '( "' . $commentaire->getUserPseudo() . '", "' . $commentaire->getCreationDate() . '", "' . $commentaire->getUpdateDate() . '", "' . $commentaire->getContent() . '", "' . $commentaire->getRefPage() . '");';
        
        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute();

        // On insére dans la variable $lastId l'identifiant de la dernière valeur
        $lastId = $db->lastInsertId();

        $commentaire->setId($lastId);
        $db = closeConnexion();

        return $commentaire;
    }



//                              |--------------------------- 2/ Fonction readCommentaires -----------------------------|



// Fonction afficher un/des commentaire/s par rapport à la page(ref_page)
    static function readCommentaires(string $pageName): array
    {
        // On se connecte à la base de donnée
        $db = openConnexion();

        // Après avoir tout sélectionné selectionné dans la table commentaire
        // On le stoocke dans un tableau
        $commentairesList = [];

        $request = "SELECT * FROM commentaire WHERE ref_page like'" . $pageName . "';" ;

        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute();

        /*
        FETCH-ASSOC = mode de récupération de données qui retourne un tableau indéxé par colonne 
        Ne permet pas d'appeler plusieurs colonnes du même nom
        */

        while ($commentairesFromDb = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // On instancie Commentaire
            $commentaire = new Commentaire($commentairesFromDb['user_pseudo'],$commentairesFromDb['content'],$commentairesFromDb['ref_page']);
            $commentaire->setId($commentairesFromDb['id']);
            $commentaire->setCreationDate($commentairesFromDb['creation_date']);
            $commentaire->setUpdateDate($commentairesFromDb['update_date']);

            $commentairesList [] = $commentaire;
        }

        $db = closeConnexion();

        return $commentairesList;
    }



//                              |--------------------------- 3/ Fonction updateCommentaire -----------------------------|



// Fonction mettre à jour un commentaire via la class Commentaire
    static function updateCommentaire(Commentaire $commentaire): Commentaire
    {
        // On se connecte à la base de donnée
        $db = openConnexion();

        $request = "UPDATE commentaire SET content ='" . $commentaire->getContent() ."',  update_date =' ". $commentaire->getUpdateDate() ."' WHERE id =:id ";
        $params= array("id"=>$_GET['id']); 

        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute($params);

        $db = closeConnexion();

        return $commentaire;
    }



//                              |--------------------------- 4/ Fonction deleteCommentaire -----------------------------|



// Fonction supprimer un commentaire via la class Commentaire
    static function deleteCommentaire($commentaire): Commentaire
    {
        // On se connecte à la base de donnée
        $db = openConnexion();

        $request = "DELETE FROM commentaire WHERE id =:id";
        $params= array("id"=>$_GET['id']);

        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute();

        $db = closeConnexion();

        return $commentaire;
    }
}

