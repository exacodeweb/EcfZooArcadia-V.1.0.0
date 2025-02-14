<style>
  /* Footer styles */
footer {
  /*background-color: #2b2b2b;*/
  background: #2c3e50;
  color: white;
  padding: 20px 10px;
}

.footer-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap; /* Pour s'assurer que le contenu se réorganise sur petits écrans */
  gap: 20px;

  padding: 10px 20px;
}

.footer-section {
  flex: 1; /* Chaque section prend une proportion égale de l'espace */
  min-width: 200px; /* Largeur minimale pour éviter que les sections soient trop étroites */

  padding-left: 20px;
}

.footer-section h4 {
  font-size: 1.2rem;
  margin-bottom: 10px;
  text-transform: uppercase;

  text-align: left;
}

.footer-section ul {
  list-style: none;
  padding: 0;
  margin: 0;

  text-align: left;
}

.footer-section ul li {
  margin-bottom: 10px;
}

.footer-section ul li a {
  color: white;
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-section ul li a:hover {
  color: #f2a007; /* Couleur au survol */
}

footer div {
  text-align: center;
  color: white;
}


/* Responsive */
@media (max-width: 768px) {
  .footer-container {
    flex-direction: column; /* Les sections passent en colonne sur petit écran */
    align-items: center;
    text-align: center;
  }


    /* Pied de page en mode pile */
    footer .row {
    flex-direction: column;
    text-align: center;
  }
}

@media (max-width: 576px) {

/* Ajustement des images de présentation */
.images-presentation img {
  width: 100%;
  max-width: 120px;
  margin: 5px;
}

/* Ajustement du texte dans les sections */
h1,
h2 {
  font-size: 1.5em;
}

/* Pied de page pour les écrans étroits */
footer ul {
  padding: 0;
  text-align: center;
}

/* Centrage des sections de footer */
footer .col-md-4 {
  text-align: center;
  margin-bottom: 10px;
}
}
</style>











<style>
  /* Footer styles */
footer {
  /*background-color: #2b2b2b;*/
  background: #2c3e50;
  color: white;
  padding: 20px 10px;
}

.footer-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap; /* Pour s'assurer que le contenu se réorganise sur petits écrans */
  gap: 20px;

  padding: 10px 20px;
}

.footer-section {
  flex: 1; /* Chaque section prend une proportion égale de l'espace */
  min-width: 200px; /* Largeur minimale pour éviter que les sections soient trop étroites */

  padding-left: 20px;
}

.footer-section h4 {
  font-size: 1.2rem;
  margin-top: 0px;
  margin-bottom: 10px;
  text-transform: uppercase;

  text-align: left;
}

.footer-section ul {
  list-style: none;
  padding: 0;
  margin: 0;

  text-align: left;
}

.footer-section ul li {
  margin-bottom: 10px;
}

.footer-section ul li a {
  color: white;
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-section ul li a:hover {
  color: #f2a007; /* Couleur au survol */
}

/* Responsive */
@media (max-width: 768px) {
  .footer-container {
    flex-direction: column; /* Les sections passent en colonne sur petit écran */
    align-items: center;
    text-align: center;
  }
}
</style>








  <footer>
    <div>
          <!--<p>&copy; 2024 Zoo Arcadia. Tous droits réservés.</p>
        </class=>-->
        <div class="footer-container">

    <!-- Section 1 -->
    <div class="footer-section">
      <h4>Contact</h4>
      <ul>
        <li><a href="tel:+33123456789">Téléphone : +33 1 23 45 67 89</a></li>
        <li><a href="mailto:info@arcadia.com">Email : info@arcadia.com</a></li>
        <li>Adresse : 35380 Paimpont France</li>
        <li>Adresse : 123 Rue de la Nature</li>
      </ul>
    </div>

    <!-- Section 2 -->
    <div class="footer-section">
      <h4>Liens rapides</h4>
      <ul>
        <!--<li><a href="#hero">Accueil</a></li>
        <li><a href="#habitats">Habitats</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>-->

        <li><a href="#hero">Accueil</a></li>
        <li><a href="#habitats">Mentions légales</a></li>
        <li><a href="#services">A propos de ce site</a></li>
      </ul>
    </div>

    <!-- Section 2 -->
    <div class="footer-section">
      <h4>Reserver</h4>
      <ul>
        <li><a href="#hero">Billets</a></li>
        <li><a href="#habitats">------</a></li>
        <li><a href="#services">------</a></li>
      </ul>
    </div>

    <!-- Section 3 -->
    <div class="footer-section">
      <h4>Réseaux sociaux</h4>
      <ul>
        <li><a href="https://www.facebook.com">Facebook</a></li>
        <li><a href="https://www.twitter.com">Twitter</a></li>
        <li><a href="https://www.instagram.com">Instagram</a></li>
        <li><a href="https://www.linkedin.com">LinkedIn</a></li>

        <!--<li><a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i>Facebook</a></li>
        <li><a href="https://www.twitter.com"><i class="fab fa-twitter">Twitter</a></li>
        <li><a href="https://www.instagram.com"><i class="fab fa-instagram">Instagram</a></li>
        <li><a href="https://www.linkedin.com"><i class="fab fa-linkedin-in">LinkedIn</a></li>-->
      </ul>
    </div>
        </div>



  <footer class="text-center py-4">
    <div>&copy; 2024 Zoo Arcadia. Tous droits réservés.</div>
  </footer>
  
    </div>
</footer>