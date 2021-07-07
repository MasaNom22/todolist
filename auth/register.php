<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <title>新規登録画面</title>
</head>
<body>
<form method="POST" action="register_check.php">
<div class="form-group row mt-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">名前
                                <small class="text-danger">（必須）</small></label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control"
                                    name="name" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">メールアドレス
                                <small class="text-danger">（必須）</small></label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control"
                                    name="email" required autocomplete="email"
                                    placeholder="例）abc@gmail.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">パスワード
                                <small class="text-danger">（必須）</small></label>
                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control"  name="password"
                                    required autocomplete="new-password" placeholder="※4文字以上">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    新規登録
                                </button>
                            </div>
                        </div>
                    </form>
</body>
</html>
