@extends('admin.layout.app')
@section('maincontent')
    
<div class="container-fluid content-inner pb-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Update EXPERIENCED TEAM section</h4>
                        </div>
                        @if(Session('success'))
                        <span class="alert alert-success" role="alert">{{session('success')}}</span>
                        @endif
                        @if(Session('error'))
                        <span class="alert alert-danger" role="alert">{{session('error')}}</span>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/updateexpert',$expert->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="email"> Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="email1" value="{{$expert->name}}">
                                @if($errors->has('name'))
                                <div class="error text-danger">{{ $errors->first('name') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Designation <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="email1" name="designation" value="{{$expert->designation}}">
                                @if($errors->has('designation'))
                                <div class="error text-danger">{{ $errors->first('designation') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email"> Image </label>
                                <input type="file" class="form-control" name="image" id="fileInput">
                                <a href="{{asset('website-images/aboutpage/'.$expert->image)}}">
                                    <img src="{{asset('website-images/aboutpage/'.$expert->image)}}" style="width:100px;height:100px;"></a><br>
                                    <span class="text-danger">(PNG,JPG,JPEG,SIZE-1MB,Min_Dim-300X400,Max_Dim-400X500)</span>
                                    @if($errors->has('image'))
                                <div class="error text-danger">{{ $errors->first('image') }}</div>
                            @endif
                            <div id="message" class="text-danger"></div>
                            </div>
                             <div class="form-group">
                                <label class="form-label" for="email">Paragraph <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="email1" name="paragraph" value="{{$expert->paragraph}}" >
                                @if($errors->has('paragraph'))
                                <div class="error text-danger">{{ $errors->first('paragraph') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Status <span class="text-danger">*</span></label>
                                <select name="status" class="form-select" aria-label="Default select example">
                                    <option >Status</option>
                                    <option value="1" {{ $expert->status == 1 ? 'selected' : '' }}>Active </option>
                                    <option value="0" {{ $expert->status == 0 ? 'selected' : '' }}>Inactive </option>
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