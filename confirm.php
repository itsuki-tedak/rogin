<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mt-5">確認画面</h2>
                <form action="auth.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">名前</label>
                        <p><?php echo htmlspecialchars($_POST['name']); ?></p>
                        <input type="hidden" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ログインID</label>
                        <p><?php echo htmlspecialchars($_POST['rogin_id']); ?></p>
                        <input type="hidden" name="rogin_id" value="<?php echo htmlspecialchars($_POST['rogin_id']); ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">メールアドレス</label>
                        <p><?php echo htmlspecialchars($_POST['email']); ?></p>
                        <input type="hidden" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">パスワード</label>
                        <p>*******</p>
                        <input type="hidden" name="password" value="<?php echo htmlspecialchars($_POST['password']); ?>">
                    </div>
                    <input type="hidden" name="use_email_as_rogin_id" value="<?php echo htmlspecialchars($_POST['use_email_as_rogin_id']); ?>">
                    <button type="submit" class="btn btn-primary w-100" name="signup">登録</button>
                    <a href="signUp.php" class="btn btn-secondary w-100 mt-3">戻る</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
