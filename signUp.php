<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="description" name="">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
                <div class="col-mb-6">
                    <h2 class="text-center mb-5">新規登録</h2>
                    <form action="confirm" method="post">
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">名前</label>
                            <input type="text" class="form-control" name="name" id="exampleInputName">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputRoginId" class="form-label">ログインID</label>
                            <input type="text" class="form-control" name="rogin_id" id="exampleInputRoginId">
                            <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="use_email_as_rogin_id" name="use_email_as_rogin_id" value="0" onchange="toggleRoginId()">
                            <label class="form-check-label" for="use_email_as_rogin_id">メールアドレスをログインIDとして使用する</label>
                        </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword" class="form-label">パスワード</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <p class="text-center mt-3"><a href="login/php">ログインはこちら</a></p>
                </div>
        </div> 
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script>
        function toggleRoginId(){
            const useEmailcheckbox = document.getElementById('use_email_as_rogin_id');
            const roginIdInput = document.getElementById('exampleInputRoginId');
            const emailInput = document.getElementById('exampleInputEmail');
            if(useEmailcheckbox.checked){
                useEmailcheckbox.value = "1";
                roginIdInput.value = emailInput.value;
                roginIdInput.setAttribute('readonly',true);
                roginIdInput.setAttribute('type',hidden);
                document.querySelector('label[for="rogin_id"]').style.display = 'none';
            } else {
                useEmailcheckbox.value = "0";
                roginIdInput.value = '';
                roginIdInput.removeAttribute('readonly');
                roginIdInput.setAttribute('type','text');
                document.querySelector('label[for="rogin_id"]').style.display = 'block';
            }
        }
        document.getElementById('email').addEventListener('input', function() {
            const useEmailCheckbox = document.getElementById('use_email_as_rogin_id');
            if (useEmailCheckbox.checked) {
                document.getElementById('rogin_id').value = this.value;
            }
        });
    </script>
</body>

</html>

