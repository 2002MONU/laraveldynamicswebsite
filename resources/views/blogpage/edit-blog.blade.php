@extends('admin.layout.app')
@section('maincontent')
    
<div class="container-fluid content-inner pb-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Update  Blog section</h4>
                        </div>
                        @if(Session('success'))
                        <span class="alert alert-success" role="alert">{{session('success')}}</span>
                        @endif
                        @if(Session('error'))
                        <span class="alert alert-danger" role="alert">{{session('error')}}</span>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{url('blog-details',$blog->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="email">Title Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="title" id="email1" value="{{$blog->title}}">
                             
                                @if($errors->has('title'))
                                <div class="error text-danger">{{ $errors->first('title') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Slug Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="slug" id="email1" value="{{$blog->slug}}">
                             
                                @if($errors->has('slug'))
                                <div class="error text-danger">{{ $errors->first('slug') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Description Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="description" id="email1" value="{{$blog->description}}">
                             
                                @if($errors->has('description'))
                                <div class="error text-danger">{{ $errors->first('description') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email"> Image </label>
                                <input type="file" class="form-control" name="image" id="fileInput">
                                <a href="{{asset('website-images/blogpage/'.$blog->image)}}">
                                    <img src="{{asset('website-images/blogpage/'.$blog->image)}}" style="width:100px;height:100px;"></a><br>
                                    <span class="text-danger"> (Note- PNG , JPG, JPEG , SIZE-1MB,Min_Dim-800X500,Max_Dim-1000X650)</span>
                                @if($errors->has('image'))
                                <div class="error text-danger">{{ $errors->first('image') }}</div>
                            @endif
                            <div id="message" class="text-danger"></div>
                            </div>
                               <div class="form-group">
                                <label class="form-label" for="email">Status</label>
                                <select name="status" class="form-select" aria-label="Default select example">
                                    <option >Status</option>
                                    <option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>Active </option>
                                    <option value="0" {{ $blog->status == 0 ? 'selected' : '' }}>Inactive </option>
                                  </select>
                                  @if($errors->has('status'))
                                <div class="error text-danger">{{ $errors->first('status') }}</div>
                            @endif
                            </div>
                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                <button type="submit" name="submit" class="btn btn-primary rounded text-capitalize">Submit</button>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection