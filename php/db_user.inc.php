<?php

namespace Blog;

require 'db_link.inc.php';

use DB\DBLink;
use PDO;

/**
 * Représente un utilisateur du blog
 */
class User
{
    public $id;
    public $nom;
    public $mdp;
    public $is_admin;
}

/**
 * Classe UserRepository : gestionnaire des utilisateurs
 */

class UserRepository
{
    const TABLE_NAME = 'blog_user';
    /**
     * Récupère tous les utilisateurs depuis la base de données.
     *
     * @param string &$message Référence à une variable de message d'état
     * @return  array Tableau vide | tableau peuplé d'objets  \Blog\User
     */
    public function getAllUsers(string &$message): array {}

    /**
     * Récupère un utilisateur à partir de son identifiant.
     *
     * @param int $id Identifiant de l'utilisateur
     * @param string &$message Référence à une variable de message d'état
     * @return \Blog\User|null utilisateur trouvé ou null si non trouvé
     */

    public function getUserById(int $id, string &$message): ?\Blog\User {}

    /**
     * Vérifie les identifiants de connexion d'un utilisateur.
     *
     * @param string $username Nom d'utilisateur
     * @param string $password Mot de passe en clair (sera haché)
     * @param string &$message Référence à une variable de message d'état
     * @return \Blog\User|null Objet utilisateur si authentifié, sinon null
     */
    public function checkLogin(string $username, string $password, string &$message): ?\Blog\User {}
}
