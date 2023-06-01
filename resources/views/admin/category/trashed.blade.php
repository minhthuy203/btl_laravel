@extends('layouts.dashboard')
@section('title', "thùng rác")
@section('main')


<div class="container">
    
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 pull-right">
        
        <a href="{{ route('category.index')}}" class="btn btn-primary ">xem danh sách</a>
    </div>
    

</div>
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
        <td>{{$c->status==0? 'tạm ẩn': 'hiển thị'}}</td>
        <td>{{$c->product->count()}}</td>
        <td>
              
        <form action="{{ route('category.destroy',$c->id)}}" method="POST" role="form">
            @csrf @method('DELETE')
            
                <button type="submit" onclick="return confirm('ba')" class="btn btn-danger">xoá</button>
                <a href="{{route('category.restore',$c->id)}}" class="btn btn-success">khôi phục</a>
            </form>
            
            
        </td>
       </tr>
       @endforeach
    </tbody>
</table>
<hr>




@stop()