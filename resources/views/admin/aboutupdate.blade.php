@extends('admin.layout.app')
@section('maincontent')
    
<div class="container-fluid content-inner pb-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Home section</h4>
                        </div>
                        @if(Session('success'))
                        <span class="alert alert-success" role="alert">{{session('success')}}</span>
                        @endif
                        @if(Session('error'))
                        <span class="alert alert-danger" role="alert">{{session('error')}}</span>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/updateabout',$about->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="email">Title Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="title" id="email1" value="{{$about->title}}">
                                @if($errors->has('title'))
                                <div class="error text-danger">{{ $errors->first('title') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="heading">Heading <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="heading" name="heading" value="{{$about->heading}}">
                                @if($errors->has('heading'))
                                <div class="error text-danger">{{ $errors->first('heading') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="Paragraph">Paragraph 1 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="Paragraph" name="paragraph1" value="{{$about->paragraph1}}">
                                @if($errors->has('paragraph1'))
                                <div class="error text-danger">{{ $errors->first('paragraph1') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="Paragraph2">Paragraph 2 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="Paragraph2" name="paragraph2" value="{{$about->paragraph2}}">
                                @if($errors->has('paragraph2'))
                                <div class="error text-danger">{{ $errors->first('paragraph2') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">About Image </label>
                                <input type="file" class="form-control" name="image" id="fileInput">
                                <a href="{{asset('website-images/aboutimages/'.$about->image)}}"><img src="{{asset('website-images/aboutimages/'.$about->image)}}" style="width:100px;height:100px;"></a><br>
                                <span class="text-danger"> ( PNG,JPG,JPEG,SIZE-1MB,Min_dim-600X400,Max_Dim-900X600)</span>
                                @if($errors->has('image'))
                                <div class="error text-danger">{{ $errors->first('image') }}</div>
                            @endif
                            <div id="message" class="text-danger"></div>
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