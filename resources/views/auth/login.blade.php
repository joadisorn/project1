@extends('layout.master')

@section('content')
    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/Auth/doLogin" method="post">
        @if($errors->any())
            @foreach($errors->all() as $item)
                {{$item}}
            @endforeach
        @endif
        @csrf
        email : <input type="email" name="email" required>
        Password : <input type="password" name="password" required>
        <button type="submit">บันทึก</button>
    </form>
@endsection
