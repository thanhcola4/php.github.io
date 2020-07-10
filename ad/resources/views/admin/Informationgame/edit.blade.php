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
    <form action="" method="post">
        @csrf
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
    <form action="" method="post"> 
        @csrf      
        <table align="center">
            <tr>
                <td>Tên game</td>  
                <td><input type="text" name="name" value="{{$infor->name}}"></td>
            </tr>
            <tr></tr>
            <td>Thể loại</td>
                <td><input type="text" name="category" value="{{$infor->category}}"></td>
            </tr>
            <tr>
                <td>Nhà sản xuất</td>
                <td><input type="text" name="producer" value="{{$infor->producer}}"></td>
            </tr>
            <tr>
                <td>Nhà phát hành</td>
                <td><input type="text" name="publisher" value="{{$infor->publisher}}"></td>
            </tr>
            <tr>
                <td>Năm phát hành</td>
                <td><input type="text" name="releaseYear" value="{{$infor->releaseYear}}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="edit"></td>
            </tr>
        </table>   
    </form> 
@endsection