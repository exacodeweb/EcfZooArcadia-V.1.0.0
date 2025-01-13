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
 .../profile_pics/6749555d0a5a8.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/674955cebe270.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/674956dc53d06.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/674958449a68c.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/6749597d10d21.jpg                 |  Bin [31m0[m -> [32m3066[m bytes
 .../profile_pics/67495baae34de.jpg                 |  Bin [31m0[m -> [32m3066[m bytes
 .../profile_pics/67495bb635139.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/67495bffbee19.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/67495db66ad20.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/67495eb010662.jpg                 |  Bin [31m0[m -> [32m3451[m bytes
 .../profile_pics/67495efd5bfa0.jpg                 |  Bin [31m0[m -> [32m3066[m bytes
 .../inutilis\303\251/66a0c98e1a5fb.jpg"            |  Bin [31m0[m -> [32m1267[m bytes
 .../inutilis\303\251/66a0cbffdd0af.jpg"            |  Bin [31m0[m -> [32m1941[m bytes
 .../inutilis\303\251/66a0cbffdd0afa1.jpg"          |  Bin [31m0[m -> [32m1267[m bytes
 .../inutilis\303\251/66cdaa91730e0.jpg"            |  Bin [31m0[m -> [32m1941[m bytes
 .../inutilis\303\251/66cee3ec7e483.jpg"            |  Bin [31m0[m -> [32m1267[m bytes
 .../inutilis\303\251/66cee46ea15a1.jpg"            |  Bin [31m0[m -> [32m1267[m bytes
 .../inutilis\303\251/66cee5ec72425.jpg"            |  Bin [31m0[m -> [32m1267[m bytes
 .../inutilis\303\251/66cee65425d97.jpg"            |  Bin [31m0[m -> [32m1267[m bytes
 .../inutilis\303\251/66cee749dadd0.jpg"            |  Bin [31m0[m -> [32m1267[m bytes
 .../inutilis\303\251/66cee78a4f47c.jpg"            |  Bin [31m0[m -> [32m1267[m bytes
 .../inutilis\303\251/66ceecf5c4e0b.jpg"            |  Bin [31m0[m -> [32m1267[m bytes
 .../inutilis\303\251/66ceed0833c8b.jpg"            |  Bin [31m0[m -> [32m1267[m bytes
 .../inutilis\303\251/66d193bc01d4a.jpg"            |  Bin [31m0[m -> [32m2274[m bytes
 .../inutilis\303\251/66d1994fc90b3.jpg"            |  Bin [31m0[m -> [32m2274[m bytes
 .../inutilis\303\251/66d19a28ddff0.jpg"            |  Bin [31m0[m -> [32m2274[m bytes
 .../inutilis\303\251/66d19a5bb343b.jpg"            |  Bin [31m0[m -> [32m2274[m bytes
 .../inutilis\303\251/66d19bc2600b2.jpg"            |  Bin [31m0[m -> [32m2274[m bytes
 .../inutilis\303\251/66d19eab78ed5.jpg"            |  Bin [31m0[m -> [32m2274[m bytes
 .../inutilis\303\251/66d19ec63a5b0.jpg"            |  Bin [31m0[m -> [32m2274[m bytes
 .../inutilis\303\251/66d1a04317e23.jpg"            |  Bin [31m0[m -> [32m2274[m bytes
 .../inutilis\303\251/66d1b237ed534.jpg"            |  Bin [31m0[m -> [32m2274[m bytes
 .../inutilis\303\251/66d204606e161.jpg"            |  Bin [31m0[m -> [32m2274[m bytes
 .../inutilis\303\251/66d21e78e1dc4.jpg"            |  Bin [31m0[m -> [32m1941[m bytes
 .../inutilis\303\251/66d21ede537ed.jpg"            |  Bin [31m0[m -> [32m1941[m bytes
 .../inutilis\303\251/66d21f0ae8b21.jpg"            |  Bin [31m0[m -> [32m1941[m bytes
 .../inutilis\303\251/66d21f1191dce.jpg"            |  Bin [31m0[m -> [32m1941[m bytes
 .../inutilis\303\251/66d22063874b7.jpg"            |  Bin [31m0[m -> [32m1941[m bytes
 .../inutilis\303\251/66d2207f4db51.jpg"            |  Bin [31m0[m -> [32m1941[m bytes
 .../ratings_feedback/profile_pics/profil1.jpg      |  Bin [31m0[m -> [32m1941[m bytes
 .../ratings_feedback/profile_pics/profil2.jpg      |  Bin [31m0[m -> [32m2274[m bytes
 .../ratings_feedback/profile_pics/profil3.jpg      |  Bin [31m0[m -> [32m1267[m bytes
 .../recuperer_commentaires_beta.php                |   87 [32m+[m
 AvisUsers/ratings_feedback/scrip-1.js              |   34 [32m+[m
 AvisUsers/ratings_feedback/scrip.js                |   34 [32m+[m
 AvisUsers/ratings_feedback/script.js               |   44 [32m+[m
 .../submit_avis_moderate (a tester).php            |