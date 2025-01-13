[33mcommit 34f64522abe25818bcd3c15be41ce85d856bd4f1[m[33m ([m[1;36mHEAD -> [m[1;32mdevelop[m[33m)[m
Author: Franck Giet <franck.giet@gmail.com>
Date:   Mon Jan 13 19:09:21 2025 +0100

    Commit initial, Ajout du fichier index.php pour le test

 .../workflows/deploy.yml                           |    0
 .gitignore                                         |   13 [32m+[m
 app/controllers/TicketController.php => .htaccess  |    0
 ARBORESCENCE PROJET ARCADIA.docx                   |  Bin [31m19936[m -> [32m26208[m bytes
 Api-carousel/avis-api.php                          |   31 [32m+[m
 AvisUsers/get_reviews.php                          |   48 [32m+[m
 .../ratings_feedback/(moderate_comments_beta).php  |   65 [32m+[m
 AvisUsers/ratings_feedback/admin-2login.php        | 1016 [32m+++++[m
 AvisUsers/ratings_feedback/admin_login.php         |  107 [32m+[m
 AvisUsers/ratings_feedback/check_images.php        |  125 [32m+[m
 .../ratings_feedback/comments_script_ratings.js    |   82 [32m+[m
 AvisUsers/ratings_feedback/csrf_token_avis.php     |   35 [32m+[m
 AvisUsers/ratings_feedback/db_connect.php          |   40 [32m+[m
 .../display_comments - Copie (2).php               | 1577 [32m++++++++[m
 .../ratings_feedback/display_comments - Copie.php  |  169 [32m+[m
 AvisUsers/ratings_feedback/display_comments-1.php  |  329 [32m++[m
 .../display_comments-sauvegarde.php                | 1551 [32m++++++++[m
 AvisUsers/ratings_feedback/display_comments.php    | 1577 [32m++++++++[m
 .../ratings_feedback/form_avis_ratings - Copie.php |  210 [32m++[m
 AvisUsers/ratings_feedback/form_avis_ratings.php   |  324 [32m++[m
 ...vis_ratingsV.1 (desactiver mais fonctionne).php |  324 [32m++[m
 AvisUsers/ratings_feedback/moderate_comments-0.php |   66 [32m+[m
 AvisUsers/ratings_feedback/moderate_comments-1.php |   66 [32m+[m
 AvisUsers/ratings_feedback/moderate_comments.php   |  243 [32m++[m
 .../profile_pics-avis/66a0c98e1a5fb.jpg            |  Bin [31m0[m -> [32m1267[m bytes
 .../profile_pics-avis/66a0cbffdd0af.jpg            |  Bin [31m0[m -> [32m1941[m bytes
 .../profile_pics-avis/66a0cbffdd0afa1.jpg          |  Bin [31m0[m -> [32m1267[m bytes
 .../ratings_feedback/profile_pics-avis/profil1.jpg |  Bin [31m0[m -> [32m1941[m bytes
 .../ratings_feedback/profile_pics-avis/profil2.jpg |  Bin [31m0[m -> [32m2274[m bytes
 .../ratings_feedback/profile_pics-avis/profil3.jpg |  Bin [31m0[m -> [32m1267[m bytes
 .../profile_pics/66cef906e5ae0.jpg                 |  Bin [31m0[m -> [32m1267[m bytes
 .../profile_pics/66d23454223d5.jpg                 |  Bin [31m0[m -> [32m2274[m bytes
 .../profile_pics/66d6266d41c8d.jpg                 |  Bin [31m0[m -> [32m2274[m bytes
 .../profile_pics/6748dd7b3424f.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/6748df5cd03d8.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/6748df9d67695.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/6748e23c4b1df.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/6748e38b5bc1f.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/6748eec0b26b9.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/6748f317e9846.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/6748f3d456f78.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/67494a2abc505.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/67494daf651a4.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/67494ef179197.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/674955164f554.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/6749551d2f5dd.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/674955555f75b.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/6749555d0a5a8.jpg                 |  