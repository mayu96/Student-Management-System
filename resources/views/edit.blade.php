@extends('layout')

@section('title', 'Student Management')

@section('content')

<form action="{{'/update/'. $student->id }}" method="post">
@csrf
                
<div class="form-group">
    <label>姓</label>
    <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control" placeholder="Enter the first name">
</div>
<div class="form-group">
    <label>名</label>
    <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control" placeholder="Enter second name">
</div>
<div class="form-group">
    <label>年齢</label>
    <input value="{{ $student->age }}" name="age" type="text" class="form-control" placeholder="Enter the Age">
</div>
<div class="form-group">
    <label>学部</label>
    <input value="{{ $student->major }}" name="major" type="text" class="form-control" placeholder="Enter major">
</div>
<input type="submit" class="btn btn-info" value="更新">
<input type="reset" class="btn btn-warning" value="リセット">     

</form>

@endsection