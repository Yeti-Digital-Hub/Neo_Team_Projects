<?php
    /**
     * Ici j'insère d'abord le fichier pour le debuggage et 
     * je récupère les données dans mon fiichier json et je stock dans un tableau
     */
    require_once('../Debug.php');

    $file = 'data/dataBase.json'; // variable pour le chemin du fichier...
    $listDataUsers = json_decode(file_get_contents($file), true); // ici les données sont récupérer... 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <!-- importation de la biliothèque bootstrap-icons...-->
        <link rel="stylesheet" href="assets/icons/bootstrap-icons.css">
        <link rel="stylesheet" href="files_style/style-admin.css?v=1.2">
    </head>
    <body>
        <header class="header">
            <div class="dashboard-title"><i class="bi bi-facebook"></i></div>
            <div class="admin-info">
                <div class="avatar">A</div>
                <div class="admin-name">Admin</div>
            </div>
        </header>
        <div class="container">
            <h1>Admin Dashboard</h1>
            <!-- tableau afficher les données des utilisateurs à l'admin...-->
            <table>
                    <!-- Section contenant l'entête du tableau...-->
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Message</th>
                            <th colspan="2">Feed-back Admin</th>
                        </tr>
                    </thead>
                    <!-- Section pour afficher le pied du tableau admin...-->
                    <tfoot>
                        <tr>
                            <td colspan="6">Le bilan des personnes ayant contactez l'entreprise est de :</td>
                                <?php
                                    if(!empty($listDataUsers)):
                                        foreach($listDataUsers as $keys=>$dataUsers){
                                            $keys= $keys+1; // ici je compte le nombre d'utilisateurs...
                                        }
                                ?>
                                        <td><?= $keys; ?></td>
                                <?php else:?>
                                        <td><?= 0; ?></td>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </tfoot>
                    <!-- Section pour afficher les donner récupérer...-->
                    <tbody>
                        <?php if(!empty($listDataUsers)): ?>
                            <?php   foreach($listDataUsers as $keys=>$dataUsers): ?>
                                    <tr>
                                        <td><?= $keys + 1; ?></td>
                                        <td><?= htmlspecialchars_decode($dataUsers[0]); ?></td>
                                        <td><?= htmlspecialchars_decode($dataUsers[1]); ?></td>
                                        <td><?= htmlspecialchars_decode($dataUsers[2]); ?></td>
                                        <td><?= htmlspecialchars_decode($dataUsers[3]); ?></td>
                                        <form method="post">
                                            <td><button style="padding: 7px; border-radius: 5px; background-color:rgb(31, 163, 64); color: #FFF; font-weight: 800; border: none" type="submit">Repondre</button></td>
                                            <td><button style="padding: 7px; border-radius: 5px; background-color:rgba(219, 39, 39, 0.94); color: #FFF; font-weight: 800; border: none" type="submit" name="delete">Supprimer</button></td>
                                        </form>
                                    </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" style="text-align:center;color:rgba(219, 39, 39, 0.94);font-weight:bolder;">No data found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </tr>
            </table>
        </div>
    </body>
</html>