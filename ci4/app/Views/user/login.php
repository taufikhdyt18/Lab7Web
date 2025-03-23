<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        #login-wrapper {
            width: 100%;
            max-width: 400px;
            background: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .alert {
            color: red;
            background: #ffe6e6;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
        }

        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div id="login-wrapper">
        <h2 style="text-align: center;">Sign In</h2>

        <?php if (session()->getFlashdata('flash_msg')) : ?>
            <div class="alert">
                <?= session()->getFlashdata('flash_msg'); ?>
            </div>
        <?php endif; ?>
        
        <form action="<?= base_url('/user/login'); ?>" method="post">
            <?= csrf_field(); ?> <!-- Tambahkan proteksi CSRF -->
            
            <div class="mb-3">
                <label for="InputForEmail">Email Address</label>
                <input type="email" name="email" class="form-control" id="InputForEmail" placeholder="Masukkan email..." value="<?= set_value('email'); ?>" required autocomplete="off">
            </div>
            
            <div class="mb-3">
                <label for="InputForPassword">Password</label>
                <input type="password" name="password" class="form-control" id="InputForPassword" placeholder="Masukkan password..." required autocomplete="off">
            </div>

            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>
