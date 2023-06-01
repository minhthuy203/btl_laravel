@extends('layouts.dashboard')
@section('title', "chỉnh sửa")
@section('main')


<form action="{{ route('category.update',$category->id)}}" method="POST" role="form">
@csrf @method('PUT')
<input type="hidden" class="form-control" name="id" value="{{$category->id}}">

    <div class="form-group @error('name') has-error @enderror">
        <label for="">name</label>
        <input type="text" class="form-control" name="name" value="{{$category->name}}">
        @error('name') <span class="help-block">{!!$message!!}</span>@enderror
    </div>
    
    <div class="input-group">
        <label for="">Status</label>
        
        <div class="radio">
            <label>
                <input type="radio" name="status" id="inputstatus" value="1" {{$category->status ==1 ? 'checked' : ''}} >
                hien thi
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="status"  value="0" {{$category->status ==0 ? 'checked' : ''}}>
                tạm ẩn
            </label>
        </div>
        
        
    </div>
    

    

    <button type="submit" class="btn btn-primary">cập nhật</button>
</form>

@stop()