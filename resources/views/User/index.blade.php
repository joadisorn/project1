@extends('layout.master')

@section('content')
    <h1>รายการผู้ใช้งาน</h1>
    <a href="/User/create">+ เพิ่มผู้ใช้ใหม่</a>
    <table>
        <thead>
            <tr>
                <td>ลำดับ</td>
                <td>ชื่อ</td>
                <td>username</td>
                <td>email</td>
                <td>สร้างเมื่อ</td>
                <td>จัดการ</td>
            </tr>
        </thead>
        <tbody>
            @foreach($Users as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->username}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->created_at}}</td>
                <td> <a href="/User/edit/{{$item->id}}">แก้</a> | <a href="/User/delete/{{$item->id}}">ลบ</a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

