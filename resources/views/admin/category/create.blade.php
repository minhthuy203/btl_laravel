@extends('layouts.dashboard')
@section('title', "thêm mới")
@section('main')

<form action="{{route('category.store')}}" method="POST" role="form">
    
@csrf
    <div class="form-group @error('name') has-error @enderror">
        <label for="">name</label>
        <input type="text" class="form-control" name="name" placeholder="Input field">
        @error('name') <span class="help-block">{!!$message!!}</span> @enderror
    </div>
    
    <div class="input-group">
        <label for="">Status</label>
        
        <div class="radio">
            <label>
                <input type="radio" name="status" id="inputstatus" value="1" checked>
                hien thi
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="status"  value="0" >
                tạm ẩn
            </label>
        </div>
        
        
    </div>
    

    

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop()