@extends('layout')

@section('title', 'Student Managemet')

@section('content')

<form action="{{'/save'}}" method="post">
@csrf
<div class="m-4">
  <h4>お問い合わせフォーム</h4>
</div>

    <div class="form-group">
      <label for="disabledTextInput">名前</label>
      <input name="name" type="text" id="disabledTextInput" class="form-control" placeholder="">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">メールアドレス</label>
      <input name="mailaddress" type="text" id="disabledTextInput" class="form-control" placeholder="">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">電話番号</label>
      <input name="phonenumber" type="text" id="disabledTextInput" class="form-control" placeholder="">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">お問い合わせ内容</label>
      <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">送信</button>

</form>


@endsection