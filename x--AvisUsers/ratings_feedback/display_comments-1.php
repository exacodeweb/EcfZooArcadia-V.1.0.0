<?php
// session_start();

// if (!isset($_SESSION['username'])) {
//     header('Location: admin_login.php');
//     exit();
// }

$config = include('../../../config/config_parrot.php');

// Connexion à la base de données
$servername = $config['db']['host'];
$username = $config['db']['user'];
$password = $config['db']['pass'];
$dbname = $config['db']['dbname'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sélection des avis avec une limitation de 6 avis les plus récents approuvés
$sql = "SELECT id, nom AS username, message AS comment, created_at AS timestamp, profile_pic FROM avisusers WHERE is_approved = 1 ORDER BY created_at DESC LIMIT 6";
$result = $conn->query($sql);

$avis = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $row['timestamp'] = (new DateTime($row['timestamp']))->format('d-m-Y H:i'); // Format de date corrigé
        $avis[] = $row;
    }
} else {
    // Gestion du cas où aucun avis n'est disponible
    $avis = [];
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrousel d'Avis</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /*.carousel-item {
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .rating {
            border: 1px solid #ddd;
            border-radius: 15px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(50, 50, 105, 0.15);
            text-align: center;
            max-width: 500px;
            margin: auto;
        }

        .profile-pic {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .profile-name {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
        }*/

        .art-rtn {
            font-size: 16px;
            font-weight: normal;
            margin-bottom: 15px;
        }
/*
        .blockquote-footer {
            font-size: 14px;
            color: #6c757d;
        }*/



    /*.carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: blue;
      border-radius: 50%;
      padding: 10px;
      height: 35px;
      width: 35px;
    }*/







    .carousel-item {
      height: 400px;
      /* Assurez-vous que les items ont une hauteur définie */
    }

    .carousel-item .content-Rating {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }

    .carousel-item img {
      max-height: 100%;
      object-fit: cover;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: blue;
      border-radius: 50%;
      padding: 10px;
      height: 35px;
      width: 35px;
    }

    .content-Rating {
      width: 100%;
      display: flex;
      flex-direction: row;
      justify-content: center;
      padding: 10px;
      border: 1px solid red;
    }

    .rating {
      border: 1px solid gray;
      border-radius: 15px;
      padding: 10px;
      height: 23.75em;
      /*height: auto;*/
      width: 100%;
      background-color: #ffff;
      box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px,
        rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;
    }

    .my-profile-img {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .profile-pic {
      border: 1px solid black;
      border-radius: 50%;
      width: 120px;
      /*80px*/
      height: 120px;
      /*80px*/
      object-fit: cover;

      display: block;
      /* S'assurer que l'image est un bloc */
      margin: auto;
      /* Centrer l'image horizontalement */
      align-content: center;
    }

    .profile-name {
      margin-top: 15px;
      margin-bottom: 0;
      font-size: 16px;
      font-weight: 600;

      text-align: center;
    }

    .avis {
      height: 10.125em;
      border: 1px solid grey;
    }

    .blockquote-footer {
      height: auto;
      width: 12.5em;
      padding: 5px;
      margin-bottom: 50px;

      display: block;
      /*flex-direction: row;*/
      width: 100%;
      text-align: center;
      /*justify-content: center;*/
    }

    /*.art-rtn {
            height: auto;
            font-size: 16px;
            font-weight: normal;
        }*/

    .art-rtn {
      height: auto;
      font-size: 16px;
      font-weight: normal;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      /* Number of lines to show */
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis;

      text-align: center;
    }

    .title-rating {
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    .logo-rtn {
      margin: 0px 5px 0px 0px;
    }

    .rating-box {
      display: flex;
      flex-direction: column;
      align-items: center;
      position: relative;
      background: none;
      padding: 0px 0px 0px 0px;
    }

    .btn-rating {
      height: 100%;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      margin: 0px 0px 0px 0px;
      width: 100%;
    }

    .link-btn-Rating {
      margin-top: 20px;
      margin-bottom: 25px;
    }

    .content-rating,
    .span-box {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      width: 100%;
      word-spacing: 2px;
    }

    .span-box {
      color: red;
      font-family: "Tangerine", Arial, serif;
      font-size: 18px;
      font-weight: 700;
    }
    </style>
</head>

<body>
    <div class="container my-5">
        <?php if (!empty($avis)): ?>
            <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($avis as $index => $av): ?>
                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                            <div class="rating">
                                <img class="profile-pic" src="../ratings_feedback/profile_pics/<?php echo htmlspecialchars($av['profile_pic']); ?>" alt="Profile Picture">
                                <h3 class="profile-name"><?php echo htmlspecialchars($av['username']); ?></h3>
                                <p class="art-rtn"><?php echo htmlspecialchars($av['comment']); ?></p>
                                <div class="blockquote-footer"><?php echo htmlspecialchars($av['timestamp']); ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
        <?php else: ?>
            <p class="text-center">Aucun avis disponible pour le moment.</p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var carouselElement = document.querySelector('#carouselExampleFade');
            if (carouselElement) {
                var carousel = new bootstrap.Carousel(carouselElement, {
                    interval: 3500,// 2.5 secondes
                    ride: 'carousel',
                    pause: false
                });
            }
        });
    </script>
</body>

</html>
