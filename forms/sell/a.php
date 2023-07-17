<html>
<head>
  <meta charset="UTF-8">
  <title>formrun.js - Alert Dialog</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
  <script src="https://sdk.form.run/js/v2/formrun.js"></script>
</head>
<body>

<div class="container">
  <h1>formrun.js <small> - Alert Dialog</small></h1>

  <div class="card">
    <h3 class="card-header">アラート・ダイアログ</h3>

    <div class="card-block">
      <form class="formrun" action="#" method="get" data-formrun-alert-dialog>
        <div class="form-group"
            data-formrun-class-if-success="has-success" data-formrun-class-if-error="has-danger" data-formrun-target="お名前">
          <label class="form-control-label" for="name">お名前</label>
          <input type="text" class="form-control" id="name" name="お名前"
                data-formrun-required data-formrun-class-if-success="form-control-success" data-formrun-class-if-error="form-control-danger">
          <div class="text-danger" data-formrun-show-if-error="お名前">お名前を正しく入力してください</div>
        </div>

        <div class="form-group"
            data-formrun-class-if-success="has-success" data-formrun-class-if-error="has-danger" data-formrun-target="メールアドレス">
          <label class="form-control-label" for="email">メールアドレス</label>
          <input class="form-control" id="email" name="メールアドレス"
                data-formrun-class-if-success="form-control-success" data-formrun-class-if-error="form-control-danger"
                data-formrun-required data-formrun-type="email" data-formrun-class-if-success="form-control-success" data-formrun-class-if-error="form-control-danger">

          <div class="text-danger" data-formrun-show-if-error="メールアドレス">asdfasdf</div>
        </div>
        <br>
        <div>
          <button type="submit" class="btn btn-primary pull-xs-right" data-formrun-error-text="未入力の項目があります" data-formrun-submitting-text="送信中...">送信</button>
        </div>
      </form>
    </div>
  </div>

  
</div><!-- /.container -->

</body>
</html>