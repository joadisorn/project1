@extends('layout.master')

@section('content')
    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/Post/store" method="post" enctype="multipart/form-data">
        @csrf
        <br>หัวข้อความ <input type="text" name="title" required>
        <br>รูปประจำข่าว<input type="file" name="thumbnail" required>
        <br>หมวดหมู่ข่าว
        <select name="category_id" id="">
            @foreach($categories as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <br>รายละเอียด
        <textarea name="detail" id="" cols="30" rows="10"></textarea>
        <br><button type="submit">บันทึก</button>
    </form>
@endsection

