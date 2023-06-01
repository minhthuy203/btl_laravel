@extends('layouts.dashboard')
@section('title', "Danh sách")
@section('main')

<div class="container">
                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <form action="" method="get" class="form-inline" role="form">

                                <div class="form-group">
                                    <input class="form-control" name="key" placeholder="Input field">
                                </div>
                                <button type="submit" class="btn btn-primary">tìm kiếm</button>
                            </form>

                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <form action="" method="get" class="form-inline" role="form">
                                @csrf
                                <div class="form-group">

                                    <select name="orderBy" id="inputorderBy" class="form-control" required="required">
                                        <option value="ASC">Mặc định</option>
                                        <option value="ASC">a-z</option>
                                        <option value="DESC">z-a</option>
                                    </select>

                                </div>
                                <button type="submit" class="btn btn-primary">lọc</button>
                            </form>

                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        
                        <a href="{{route('category.trashed')}}" class="btn btn-danger">thùng rác</a>
                        </div>
                    </div>
                </div>
                
                
                <hr>

<table class="table table-hover">
    <thead>
        <tr>
            <th>stt</th>
            <th>Tên danh mục</th>
            <th>Trạng thái</th>
            <th>Tổng sản phẩm</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($category as $c)
       <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$c->name}}</td>
        <td>{{$c->status ==0? 'tạm ẩn':'hiển thị'}}</td>
        <td>{{$c->product->count()}}</td>
        <td>
            
            
            <form action="{{ route('category.destroy',$c->id)}}" method="POST" role="form">
            @csrf @method('DELETE')
            
                <button type="submit" class="btn btn-danger">xoá</button>
                <a href="{{ route('category.edit',$c->id) }}" class="btn btn-success">sửa</a>
            </form>
            
            
        </td>
       </tr>
       @endforeach
    </tbody>
</table>


@stop()