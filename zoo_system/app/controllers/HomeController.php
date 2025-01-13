<?php

class HomeController extends Controller {
    public function index() {
        // Charge la vue de la page d'accueil
        $this->view('home/index');
    }
}
?>


<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{
  public function index()
  {
    // Charger la vue index (page d'accueil)
    $this->view('home/index');
  }
}

?>



<!-- Premier fichier -->
<?php

namespace App\Controllers;

use App\Models\Animal;
use App\Models\Service;
use App\Models\Habitat;
use App\Models\VisitorReview;

class HomeController extends Controller
{
  public function index()
  {
    // Récupérer les données nécessaires
    $animals = Animal::all();
    $services = Service::all();
    $habitats = Habitat::all();
    $reviews = VisitorReview::latest()->take(5)->get(); // Derniers 5 avis

    // Charger la vue avec les données
    $this->view('home.index', [
      'animals' => $animals,
      'services' => $services,
      'habitats' => $habitats,
      'reviews' => $reviews,
    ]);
  }
}
?>


<?php
// avis utilisateur
// Dans HomeController.php
public function index()
{
    // Charger les avis des visiteurs approuvés
    $reviews = $this->model('Review')->getApprovedReviews();
    
    // Passer les avis à la vue
    $this->view('home/index', ['reviews' => $reviews]);
}
?>
