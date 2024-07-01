<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* Style CSS untuk dashboard */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        .welcome-msg {
            text-align: center;
            margin-bottom: 20px;
        }
        .logout-btn {
            float: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Dashboard</h2>
        <div class="welcome-msg">
            <p>Welcome, Admin!</p>
        </div>
        <div class="logout">
            <?= $this->include('menu/menu'); ?>
            <a href="<?= base_url('User/logout')?>" class="logout-btn">Logout</a>
        </div>
        
    </div>
</body>
</html>
