@extends('admin.layout.app')
@section('maincontent')
    
<div class="container-fluid content-inner pb-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Service section</h4>
                        </div>
                        @if(Session('success'))
                        <span class="alert alert-success" role="alert">{{session('success')}}</span>
                        @endif
                        @if(Session('error'))
                        <span class="alert alert-danger" role="alert">{{session('error')}}</span>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/service')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="email">Title Name</label>
                                <input type="text" class="form-control" name="title" id="email1" >
                                @if($errors->has('title'))
                                <div class="error text-danger">{{ $errors->first('title') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Heading</label>
                                <input type="text" class="form-control" id="email1" name="heading" >
                                @if($errors->has('heading'))
                                <div class="error text-danger">{{ $errors->first('heading') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Paragraph</label>
                                <input type="text" class="form-control" id="email1" name="paragraph" >
                                @if($errors->has('paragraph'))
                                <div class="error text-danger">{{ $errors->first('paragraph') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Point 1</label>
                                <input type="text" class="form-control" id="email1" name="point1" >
                                @if($errors->has('point1'))
                                <div class="error text-danger">{{ $errors->first('point1') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Point 1</label>
                                <input type="text" class="form-control" id="email1" name="point2" >
                                @if($errors->has('point2'))
                                <div class="error text-danger">{{ $errors->first('point2') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Point 1</label>
                                <input type="text" class="form-control" id="email1" name="point3" >
                                @if($errors->has('point3'))
                                <div class="error text-danger">{{ $errors->first('point3') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Point 1</label>
                                <input type="text" class="form-control" id="email1" name="point4" >
                                @if($errors->has('point4'))
                                <div class="error text-danger">{{ $errors->first('point4') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email"> Image</label>
                                <input type="file" class="form-control" name="image" id="fileInput">
                               <span class="text-danger">(Note-JPG,PNG,JPEG,Size-1MB,Min_Dim-450X450,Max_Dim-600X600)</span>
                                @if($errors->has('image'))
                                <div class="error text-danger">{{ $errors->first('image') }}</div>
                            @endif
                            <div id="message" class="text-danger"></div>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="email">Paragraph <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="email1" name="paragraph" >
                                @if($errors->has('paragraph'))
                                <div class="error text-danger">{{ $errors->first('paragraph') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Status</label>
                                <select name="status" class="form-select" aria-label="Default select example">
                                    <option >Status</option>
                                    <option value="1">Active </option>
                                    <option value="0">Inactive </option>
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