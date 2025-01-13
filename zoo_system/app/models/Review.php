<?php
class Review extends Model {
    protected $table = 'avis_visiteurs';

    public function createReview($nom, $commentaire) {
        $sql = "INSERT INTO $this->table (nom, commentaire) VALUES (:nom, :commentaire)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['nom' => $nom, 'commentaire' => $commentaire]);
    }

    public function getApprovedReviews() {
        $sql = "SELECT nom, commentaire, date_publication FROM $this->table WHERE statut = 'approuvé' ORDER BY date_publication DESC";
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    // Méthodes pour approuver, rejeter les avis, etc.
}
