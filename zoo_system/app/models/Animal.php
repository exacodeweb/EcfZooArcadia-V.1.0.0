<?php
namespace App\Models;

use App\Core\Model;

class Animal extends Model
{
    protected $table = 'animals'; // Nom de la table dans la base de données

    public static function all()
    {
        // Requête pour récupérer tous les animaux
        return self::query("SELECT * FROM {$this->table}");
    }
}