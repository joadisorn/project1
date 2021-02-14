@extends('layout.master')

@section('content')
    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/User/store" method="post">
        @csrf
        name<input type="text" name="name" required><br>
        Username<input type="text" name="username" required><br>
        email<input type="text" name="email" required><br>
        password<input type="text" name="password" required><br>
        <button type="submit">บันทึก</button>
    </form>
@endsection

