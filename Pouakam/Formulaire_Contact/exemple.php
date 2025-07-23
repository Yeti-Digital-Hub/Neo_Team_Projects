<?php
    $file = 'data/dataBase.json';
    $listDataUsers = [];
    if(file_exists($file)){
        $listDataUsers = json_decode(file_get_contents($file), true);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Interface</title>
    <style>
        body {
            background: #ecebeb;
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        /*.header {
            background: #fff;
            padding: 22px 38px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 12px rgba(71,83,248,0.07);
        }
        .header .admin-info {
            display: flex;
            align-items: center;
            gap: 14px;
        }
        .header .avatar {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: #4753f8;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4em;
            font-weight: bold;
            box-shadow: 0 2px 8px rgba(71,83,248,0.13);
        }
        .header .admin-name {
            font-weight: 700;
            color: #4753f8;
            font-size: 1.08em;
        }*/
        .container {
            max-width: 950px;
            margin: 40px auto;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(71,83,248,0.13);
            padding: 40px;
        }
        h1 {
            text-align: center;
            color: #4753f8;
            font-size: 2.5em;
            margin-bottom: 30px;
            font-weight: 900;
            letter-spacing: 2px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 16px 12px;
            text-align: left;
        }
        th {
            background: #4753f8;
            color: #fff;
            font-size: 1.1em;
            font-weight: 700;
        }
        tr:nth-child(even) {
            background: #ecebeb;
        }
        tr:hover {
            background: #d1e7dd;
            transition: background 0.3s;
        }
        @media (max-width: 700px) {
            .container {
                padding: 10px;
            }
            table, th, td {
                font-size: 0.95em;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="dashboard-title">Dashboard</div>
        <div class="admin-info">
            <div class="avatar">A</div>
            <div class="admin-name">Admin</div>
        </div>
    </div>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($listDataUsers)): ?>
                    <?php foreach($listDataUsers as $idx => $user): ?>
                        <tr>
                            <td><?= $idx + 1 ?></td>
                            <td><?= htmlspecialchars_decode($user[0]); ?></td>
                            <td><?= htmlspecialchars_decode($user[1]); ?></td>
                            <td><?= htmlspecialchars_decode($user[2]); ?></td>
                            <td><?= htmlspecialchars_decode($user[3]); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" style="text-align:center;color:#4753f8;">No data found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>