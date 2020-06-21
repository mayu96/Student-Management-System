@extends('layout')

@section('title', 'Student Management')

@section('content')

    <a href="{{ url('/create') }}" class="ml-5">学生登録</a>
    <a href="{{ url('/contact') }}" class="ml-4">お問い合わせ</a>

   

    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">姓</th>
          <th scope="col">名</th>
          <th scope="col">年齢</th>
          <th scope="col">学部</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>    
      @foreach($students as $student)
        <tr>
          <td>{{ $student->firstName }}</td>
          <td>{{ $student->secondName }}</td>
          <td>{{ $student->age }}</td>
          <td>{{ $student->major }}</td>
          <td>
            <a href="{{ url('/edit/'. $student->id) }}" class="btn btn-sm btn-warning">編集</a>
            <a href="{{ url('/delete/'. $student->id) }}" class="btn btn-sm btn-info">削除</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

@endsection





















