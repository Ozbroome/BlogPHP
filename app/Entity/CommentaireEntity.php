<?php
namespace App\Entity;

use Core\Entity\Entity;

class CommentaireEntity extends Entity{

    public function getUrl(){
        return 'index.php?p=chapitres.commentaire&id=' . $this->id;
    }

}