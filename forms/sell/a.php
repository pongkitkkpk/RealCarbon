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
                    <div class="form-group" data-formrun-class-if-success="has-success" data-formrun-class-if-error="has-danger" data-formrun-target="uio">
                        <label class="form-control-label">お名前</label>
                        
                        <input type="number" class="form-control" name="uio" 
                        data-formrun-required data-formrun-class-if-success="form-control-success" 
                        data-formrun-class-if-error="form-control-danger">
                        <div class="text-danger" data-formrun-show-if-error="uio">お名前を正しく入力してください</div>
                    </div>

                    <div class="form-group" data-formrun-class-if-success="has-success" data-formrun-class-if-error="has-danger" data-formrun-target="q">
                        
                    <label class="form-control-label">メールアドレス</label>
                        <input class="form-control" name="q" data-formrun-class-if-success="form-control-success" data-formrun-class-if-error="form-control-danger" 
                        data-formrun-required data-formrun-type="number" 
                        data-formrun-class-if-success="form-control-success" 
                        data-formrun-class-if-error="form-control-danger">

                        <div class="text-danger" data-formrun-show-if-error="q">メールアドレスを正しく入力してください</div>
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