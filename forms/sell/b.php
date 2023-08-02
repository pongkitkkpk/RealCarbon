<html>
<head>
  <meta charset="UTF-8">
  <title>formrun.js - Confirm mode</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
  <script src="https://sdk.form.run/js/v2/formrun.js"></script>
</head>
<body>

<div class="container">
  <h1>formrun.js <small> - Confirm mode</small></h1>

  <div class="card">
    <h3 class="card-header" data-formrun-hide-if-confirm>first</h3>
    <h3 class="card-header" data-formrun-show-if-confirm>check</h3>

    <div class="card-block">
      <form class="formrun" action="#" method="get" data-formrun-confirm>
        <div class="form-group row"
            data-formrun-class-if-success="has-success" data-formrun-class-if-error="has-danger" data-formrun-target="お名前">
          <label class="col-xs-3 col-form-label" for="name">ชื่อ</label>
          <div class="col-xs-9" data-formrun-hide-if-confirm>
            <input type="text" class="form-control" id="name" name="お名前"
                  data-formrun-required data-formrun-class-if-success="form-control-success" data-formrun-class-if-error="form-control-danger">
            <div class="text-danger" data-formrun-show-if-error="お名前">ชื่อผิด</div>
          </div>
          <div class="col-xs-9" data-formrun-show-if-confirm>
            <span data-formrun-confirm-value="お名前"></span>
          </div>
        </div>

        <div class="form-group row"
            data-formrun-class-if-success="has-success" data-formrun-class-if-error="has-danger" data-formrun-target="メールアドレス">
          <label class="col-xs-3 col-form-label" for="email">email</label>
          <div class="col-xs-9" data-formrun-hide-if-confirm>
            <input class="form-control" id="email" name="メールアドレス"
                  data-formrun-class-if-success="form-control-success" data-formrun-class-if-error="form-control-danger"
                  data-formrun-required data-formrun-type="email" data-formrun-class-if-success="form-control-success" data-formrun-class-if-error="form-control-danger">

            <div class="text-danger" data-formrun-show-if-error="メールアドレス">メールアドレスを正しく入力してください</div>
          </div>
          <div class="col-xs-9" data-formrun-show-if-confirm>
            <span data-formrun-confirm-value="メールアドレス"></span>
          </div>
        </div>

        <fieldset class="form-group row">
          <span class="col-xs-3 col-form-label">เพศ</span>
          <div class="col-xs-9" data-formrun-hide-if-confirm>
            <label class="form-check-label form-check-inline">
              <input class="form-check-input" type="radio" name="性別" value="男性" data-formrun-required>
              男性
            </label>
            <label class="form-check-label form-check-inline">
              <input class="form-check-input" type="radio" name="性別" value="女性" data-formrun-required>
              女性
            </label>
            <br>
            <span class="text-danger" data-formrun-show-if-error="性別">性別を入力してください</span>
          </div>
          <div class="col-xs-9" data-formrun-show-if-confirm>
            <span data-formrun-confirm-value="性別"></span>
          </div>
        </fieldset>

        <div class="form-group row">
          <label class="col-xs-3 col-form-label">ที่อยู่</label>
          <div class="col-xs-9" data-formrun-hide-if-confirm>
            <select class="form-control form-control-lg" name="業種" data-formrun-required>
              <option value>--選択してください--</option>
              <option value="IT">IT</option>
              <option value="メーカー">メーカー</option>
              <option value="商社">商社</option>
              <option value="医療">医療</option>
              <option value="金融">金融</option>
              <option value="建設・不動産">建設・不動産</option>
              <option value="金融">金融</option>
              <option value="人材">人材</option>
              <option value="小売">小売</option>
              <option value="飲食">飲食</option>
              <option value="物流">物流</option>
              <option value="その他">その他</option>
            </select>
            <span class="text-danger" data-formrun-show-if-error="業種">業種を正しく入力してください</span>
          </div>
          <div class="col-xs-9" data-formrun-show-if-confirm>
            <span data-formrun-confirm-value="業種"></span>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-xs-3">สถานะ</label>
          <div class="col-xs-9" data-formrun-hide-if-confirm>
            <div class="form-check">
              <label class="form-check-label"><input class="form-check-input" type="checkbox" name="職種[]" value="営業" data-formrun-required> 営業</label>
            </div>
            <div class="form-check">
              <label class="form-check-label"><input class="form-check-input" type="checkbox" name="職種[]" value="マーケ" data-formrun-required> マーケ</label>
            </div>
            <div class="form-check">
              <label class="form-check-label"><input class="form-check-input" type="checkbox" name="職種[]" value="開発" data-formrun-required> 開発</label>
            </div>
            <div class="form-check">
              <label class="form-check-label"><input class="form-check-input" type="checkbox" name="職種[]" value="デザイン" data-formrun-required> デザイン</label>
            </div>
            <span class="text-danger" data-formrun-show-if-error="職種[]">職種を正しく入力してください</span>
          </div>

          <div class="col-xs-9" data-formrun-show-if-confirm>
            <span data-formrun-confirm-value="職種[]"></span>
          </div>
        </div>
        
        <div class="_formrun_gotcha">
          <style media="screen">._formrun_gotcha {position:absolute!important;height:1px;width:1px;overflow:hidden;}</style>
          <label for="_formrun_gotcha">If you are a human, ignore this field</label>
          <input type="text" name="_formrun_gotcha" id="_formrun_gotcha" tabindex="-1">
        </div>

        <br>
        <div>
          <a href="javascript:void(0)" class="btn btn-secondary" data-formrun-back-button>ย้อนกลับ</a>
          <button type="submit" class="btn btn-primary pull-xs-right" data-formrun-error-text="เกิดข้อผิดพลาด" data-formrun-send-text="บันทึก" data-formrun-submitting-text="กำลังบันทึก...">ตรวจเช็คข้อมูล</button>
        </div>
      </form>
    </div>
  </div>
  
</div><!-- /.container -->

</body>
</html>

