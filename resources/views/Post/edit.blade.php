@extends('layout.master')

@section('content')
    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/Post/update/{{$User->id}}" method="post">
        @csrf
        <input type="text" name="name" value="{{$User->name}}" required>
        <button type="submit">บันทึก</button>
    </form>
@endsection

