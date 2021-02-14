@extends('layout.master')

@section('content')
    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/User/update/{{$User->id}}" method="post">
        @csrf
        ชื่อ<input type="text" name="name" value="{{$User->name}}" required>
        username<input type="text" name="username" value="{{$User->username}}" required>
        email<input type="email" name="email" value="{{$User->email}}" required>
        password<input type="password" name="password" value="{{$User->password}}" required>
        <button type="submit">บันทึก</button>
    </form>
@endsection

