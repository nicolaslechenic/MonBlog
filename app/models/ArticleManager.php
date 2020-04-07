
<?php

class ArticleManager
{
    // fonction appelée dans commentaireController.php
    static function createArticle(Article $article): Article
    {
        // Pour créer un article
        // On se connecte à la base de donnée
        $db = openConnexion();
        // On insére dans la table article
        $request = "INSERT INTO article (title, image, creation_date, update_date, content, ref_page) VALUES ";

        // Getter est une méthode chargée de renvoyer la valeur d'un attribut ex: getTitle voir article.php
        $request .= '( "' . $article->getTitle() . '", "' . $article->getImage() . '","' . $article->getCreationDate() . '", "' . $article->getUpdateDate() . '", "' . $article->getContent() . '", "' . $article->getRefPage() . '");';
        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute();

        $lastId = $db->lastInsertId();

        $article->setId($lastId);
        $db = closeConnexion();

        return $article;
    }


    // fonction appelée dans pageController.php
    static function readArticles($pageName): array
    {
        // Pour lire un article dans la bdd
        $db = openConnexion();
        // Après avoir tout sélectionné selectionné dans la table article
        // On le stoocke dans un tableau 
        $articlesList = [];

        $request = "SELECT * FROM article WHERE ref_page like '" . $pageName . "';" ;

        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute();


        while ($articlesFromDb = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // On instancie Commenataire
            $article = new Article($articlesFromDb['title'],$articlesFromDb['content'],$articlesFromDb['image'],$articlesFromDb['ref_page']);
            $article->setId($articlesFromDb['id']);
            $article->setCreationDate($articlesFromDb['creation_date']);
            $article->setUpdateDate($articlesFromDb['update_date']);

            $articlesList [] = $article;
        }

        $db = closeConnexion();

        return $articlesList;
    }

    static function readAllArticles($pageName): array
    {
        // Pour lire les articles dans la bdd
        $db = openConnexion();
        // Après avoir tout sélectionné selectionné dans la table article
        // On le stoocke dans un tableau 
        $articlesAllList = [];

        $request = "SELECT * FROM article" ;

        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute();


        while ($articlesFromDb = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // On instancie Commenataire
            $articleAll = new Article($articlesFromDb['title'],$articlesFromDb['content'],$articlesFromDb['image'],$articlesFromDb['ref_page']);
            $articleAll->setId($articlesFromDb['id']);
            $articleAll->setCreationDate($articlesFromDb['creation_date']);
            $articleAll->setUpdateDate($articlesFromDb['update_date']);

            $articlesAllList [] = $articleAll;
        }

        $db = closeConnexion();

        return $articlesAllList;
    }

    static function updateArticle(Article $article): Article
    {
        // Pour modifier un commenaitre
        $db = openConnexion();
        $request = "UPDATE article SET ";
         // Getter est une méthode chargée de renvoyer la valeur d'un attribut ex: getTitle voir article.php
        $request .= "title ='" . $article->getTitle() . "content ='" . $article->getContent() . "', ' update_date" . $article->getUpdateDate() . "');";
        $request .= "WHERE id ='" . $article->getId() . "');";
        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute();
        $db = closeConnexion();

        return $article;
    }

    static function deleteArticle($article): Article
    {
        // Pour supprimer un article
        $db = openConnexion();
        $request = "DELETE FROM article WHERE id ='" . $article->getId() . "'";
        // On prépare et exécute la requête
        $stmt = $db->prepare($request);
        $stmt->execute();
        $db = closeConnexion();

        return $article;
    }
}

