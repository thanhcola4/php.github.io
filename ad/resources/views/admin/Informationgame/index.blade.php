@extends('web-layout.master')

@section('title','Thông tin game')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách thể loại</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
        <tr>
            <td>id</td>
            <td>Tên Game</td>
            <td>Thể loại</td>
            <td>Nhà sản xuất</td>
            <td>Nhà phát hành</td>
            <td>Năm phát hành</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @foreach ($information as $st)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$st ->name}}</td>
                <td>{{$st ->category}}</td>
                <td>{{$st ->producer}}</td>
                <td>{{$st ->publisher}}</td>
                <td>{{$st ->releaseYear}}</td>
                <td><a href="{{ route('admin.infor.edit',['id' => $st->id ])}}">Edit</a></td>
                <td><a href="{{ route('admin.infor.destroy',['id' => $st->id ])}}">Delete</a></td>
            </tr>
        @endforeach
        
</table>
@endsection
    

