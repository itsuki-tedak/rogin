<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="text-center mt-5">ログイン</h2>
            <form action="auth.php" method="post">
                <div class="mb-3">
                    <label for="rogin_id" class="form-label">ログインID(またはメールアドレス)</label>
                    <input type="text" class="form-control">
                </div>
            </form>
        </div>
    </div>
</body>
</html>