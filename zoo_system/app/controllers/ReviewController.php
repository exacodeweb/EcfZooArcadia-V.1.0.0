<?php
class ReviewController extends Controller {
  private $reviewModel;

  public function __construct() {
      $this->reviewModel = new Review();
  }

  public function submitReview() {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $nom = htmlspecialchars($_POST['nom']);
          $commentaire = htmlspecialchars($_POST['commentaire']);
          $this->reviewModel->createReview($nom, $commentaire);
          header('Location: /avis');
      }
  }

  public function showReviews() {
      $reviews = $this->reviewModel->getApprovedReviews();
      $this->view('review/index', ['reviews' => $reviews]);
  }

  // Méthodes pour modérer les avis (approuver/rejeter)
}