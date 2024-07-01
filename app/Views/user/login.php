<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        .container {
            display: flex;
            flex-direction: row;
            max-width: 1280px;
            width: 100%;
            margin: 0 auto;
        }
        .left-side, .right-side {
            flex: 1;
            padding: 20px;
        }
        .left-side {
            background-color: #fff;
        }
        .right-side {
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-side">

        </div>
        <div class="right-side">
            <div>
                <h2>Login</h2>
            </div>
            <form action="" method="post">
            <div class="mb-3">
                <label for="InputForEmail" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="InputForEmail"
                    value="<?= set_value('email') ?>">
            </div>
            <div class="mb-3">
                
                <label for="InputForPassword" class="form-label">Password</label>

                <input type="password" name="password" class="form-control" id="InputForPassword">

            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        </div>

    </div>
</body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
    <div id="login-wrapper">
        <h1>Login</h1>
        <?php if (session()->getFlashdata('flash_msg')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('flash_msg') ?></div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="InputForEmail" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="InputForEmail"
                    value="<?= set_value('email') ?>">
            </div>
            <div class="mb-3">
                
                <label for="InputForPassword" class="form-label">Password</label>

                <input type="password" name="password" class="form-control" id="InputForPassword">

            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>

</html> -->