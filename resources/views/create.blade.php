@extends('layout')

@section('title', 'Student Management')

@section('content')

<form action="{{'/store'}}" method="post">
@csrf
                
<div class="form-group">
    <label>名字</label>
    <input name="firstName" type="text" class="form-control" placeholder="Enter the first name">
</div>
<div class="form-group">
    <label>名前</label>
    <input name="secondName" type="text" class="form-control" placeholder="Enter second name">
</div>
<div class="form-group">
    <label>年齢</label>
    <input name="age" type="text" class="form-control" placeholder="Enter the Age">
</div>
<div class="form-group">
    <label>学部</label>
    <input name="major" type="text" class="form-control" placeholder="Enter major">
</div>
<input type="submit" class="btn btn-info" value="保存">
<input type="reset" class="btn btn-warning" value="リセット">                        
</form>

@endsection