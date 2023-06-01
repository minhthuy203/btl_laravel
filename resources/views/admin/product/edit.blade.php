@extends('layouts.dashboard')
@section('title', "chỉnh sửa")
@section('main')


<form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group @error('name') has-error @enderror">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" value="{{$product->name}}" >
                    @error('name')<span class="help-block">{!!$message!!}</span>@enderror

                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group ">
                        <label for="">danh mục</label>
                        <select name="category_id" id="input" class="form-control">
                            <option value="">-----chọn danh mục-----</option>
                            @foreach($category as $c)
                            <option value="{{ $c->id }}" {{$product->category_id == $c->id ? ' selected' : ''}}>
                                {{ $c->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id') <div>{!!$message!!}</div> @enderror
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="input-group">
                        <label for="">trạng thái</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="inputstatus" value="1"
                                    {{$product->status ==1 ? 'checked' : ''}}>
                                hien thi
                            </label>

                            <label style="margin-left:20px">
                                <input type="radio" name="status" value="0" {{$product->status ==0 ? 'checked' : ''}}>
                                tạm ẩn
                            </label>
                        </div>
                        @error('status') <div>{!!$message!!}</div> @enderror
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="">giá:</label>
                        <input type="number" name="price" id="inputgiá" class="form-control" value="{{$product->price}}">
                        @error('price') <div>{!!$message!!}</div> @enderror

                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="">giá km:</label>
                        <input type="number" name="sale_price" id="inputgiá" class="form-control" value="{{$product->Sale_price}}">
                        @error('sale_price') <div>{!!$message!!}</div> @enderror

                    </div>
                </div>

            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                <div class="form-group ">
                    <label for="">ảnh</label>
                    <input type="file" name="upload" id="input" class="form-control" >

                    @error('upload') <div>{!!$message!!}</div> @enderror

                </div>
                <img src="{{url('public/uploads')}}/{{$product->image}}" width="250">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="">nội dung:</label>
                    <textarea name="content" id="textarea" class="form-control" value="{{$product->content}}"></textarea>
                </div>
            </div>

        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </div>





</form>

@stop()