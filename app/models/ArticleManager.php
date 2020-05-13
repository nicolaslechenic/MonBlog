<?php
namespace Projet\Models;
/*
                                | -----------------------------------ARTICLEMANAGER-------------------------------- | 
                                |                                                                                   |
                                |                             1/ Fonction createArticle                             |
                                |                             2/ Fonction readArticles                              |
                                |                             3/ Fonction readOneArticle                            |
                                |                             4/ Fonction readAllArticles                           |
                                |                             5/ Fonction updateArticle                             |
                                |                             6/ Fonction deleteArticle                             |                                
                                |                                                                                   |
                                |-----------------------------------------------------------------------------------|
*/


class ArticleManager extends DbConnexion
{

    

//                              |--------------------------- 1/ Fonction createArticle -----------------------------|



// Fonction créer un article via la class Article
    static function createArticle(Article $article): Article
    {
        // Pour créer un article
        // On se connecte à la base de donnée
        $db = DbConnexion::openConnexion();
        
        // On insére dans la table 'article' le titre, l'image, la date de création, la date de mise à jour, le contenu, la ref-page 
        $request = "INSERT INTO article (title, image, creation_date, update_date, content, ref_page) VALUES ";
        $request .= '( "' . $article->getTitle() . '", "' . $article->getImage() . '","' . $article->getCreationDate() . '", "' . $article->getUpdateDate() . '", "' . $article->getContent() . '", "' . $article->getRefPage() . '");';
        
        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute();

        // On insére dans la variable $lastId l'identifiant de la dernière valeur
        $lastId = $db->lastInsertId();

        $article->setId($lastId);
        
        $db = DbConnexion::closeConnexion();

        return $article;
    }



//                              |---------------------------- 2/ Fonction readArticles -----------------------------|



// Fonction afficher un/des article/s par rapport à la page(ref_page)
    function readArticles($pageName): array
    {
        // On se connecte à la base de donnée
        $db = DbConnexion::openConnexion();
        /* 
         Après avoir tout sélectionné selectionné dans la table article
         On le stoocke dans un tableau 
        */ 
        $articlesList = [];

        // On séléctionne tout dans la table article dans la colonne ref_pag = $pageName
        $request = "SELECT * FROM article WHERE ref_page like '" . $pageName . "';" ;

        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute();

        /*
         On crée une boucle tant que ...
         FETCH-ASSOC = mode de récupération de données qui retourne un tableau indéxé par colonne 
         Ne permet pas d'appeler plusieurs colonnes du même nom
        */

        while ($articlesFromDb = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            // On instancie un nouvel article
            $article = new Article($articlesFromDb['title'],$articlesFromDb['content'],$articlesFromDb['image'],$articlesFromDb['ref_page']);
            $article->setId($articlesFromDb['id']);
            $article->setCreationDate($articlesFromDb['creation_date']);
            $article->setUpdateDate($articlesFromDb['update_date']);

            $articlesList [] = $article;
        }

        $db = DbConnexion::closeConnexion();

        return $articlesList;
    }



//                              |-------------------------- 3/ Fonction readOneArticle ----------------------------|



// Fonction afficher un seul article
    static function readOneArticle()

    {
        // On se connecte à la base de donnée
        $db = DbConnexion::openConnexion();
        // Après avoir tout sélectionné selectionné dans la table article
        // On le stoocke dans un tableau 
        $articlesList = [];

        $request = "SELECT * FROM article WHERE id=:id";

        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $params= array("id"=>$_GET['id']);
        $stmt->execute($params);
        $articleFromDb = $stmt->fetch();
        // On instancie un nouvel article
            $article = new Article($articleFromDb['title'],$articleFromDb['content'],$articleFromDb['image'],$articleFromDb['ref_page']);
            $article->setId($articleFromDb['id']);
            $article->setCreationDate($articleFromDb['creation_date']);
            $article->setUpdateDate($articleFromDb['update_date']);

            $articlesList [] = $article;
        
        $db = DbConnexion::closeConnexion();

        return $article;
    }



//                              |--------------------------- 4/ Fonction readAllArticles --------------------------|



// Fonction afficher tous les articles
    function readAllArticles(): array
    {
        // On se connecte à la base de donnée
        $db = DbConnexion::openConnexion();

        // Après avoir tout sélectionné dans la table article
        // On le stoocke dans un tableau 
        $articlesAllList = [];

        // On séléctionne tout dans la table article
        $request = "SELECT * FROM article" ;

        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute();

        /*
         On crée une boucle tant que ...
         FETCH-ASSOC = mode de récupération de données qui retourne un tableau indéxé par colonne 
         Ne permet pas d'appeler plusieurs colonnes du même nom
        */
        while ($articlesFromDb = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            // On instancie un nouvel article
            $articleAll = new Article($articlesFromDb['title'],$articlesFromDb['content'],$articlesFromDb['image'],$articlesFromDb['ref_page']);
            $articleAll->setId($articlesFromDb['id']);
            $articleAll->setCreationDate($articlesFromDb['creation_date']);
            $articleAll->setUpdateDate($articlesFromDb['update_date']);

            $articlesAllList [] = $articleAll;
        }

        $db = DbConnexion::closeConnexion();

        return $articlesAllList;
    }



//                              |-------------------------- 5/ Fonction updateArticle -----------------------------|



// Fonction mettre à jour un article via la class Article
    static function updateArticle(Article $article): Article
    {
        // On se connecte à la base de donnée
        $db = DbConnexion::openConnexion();

        // On fait une mise à jour dans la table article sur le contenu, le titre, l'image, la ref_page, la date
        $request = "UPDATE article SET content =' ". $article->getContent() ."', title =' ". $article->getTitle() ."', image =' ". $article->getImage() ."', ref_page =' ". $article->getRefPage() ."', update_date =' ". $article->getUpdateDate() ."' WHERE id =:id ";
        $params= array("id"=>$_GET['id']);

        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute($params);

        $db = DbConnexion::closeConnexion();

        return $article;
    }



//                              |-------------------------- 6/ Fonction deleteArticle ----------------------------|



// Fonction supprimer un article via la class Article
    static function deleteArticle(int $id) : void
    {
        // On se connecte à la base de donnée
        $db = DbConnexion::openConnexion();

        // On supprime un article avec son id
        $request = "DELETE FROM article WHERE id =:id";
        $params= array("id"=>$id);

        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute($params);

        $db = DbConnexion::closeConnexion();

        
        
    }
}

