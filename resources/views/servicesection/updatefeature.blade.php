@extends('admin.layout.app')
@section('maincontent')
    
<div class="container-fluid content-inner pb-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Update Service Feature section</h4>
                        </div>
                        @if(Session('success'))
                        <span class="alert alert-success" role="alert">{{session('success')}}</span>
                        @endif
                        @if(Session('error'))
                        <span class="alert alert-danger" role="alert">{{session('error')}}</span>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{url('updateservicefeature',$featureservice->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="email">Title Name</label>
                                <input type="text" class="form-control" name="title" id="email1" value="{{$featureservice->title}}">
                                @if($errors->has('title'))
                                <div class="error text-danger">{{ $errors->first('title') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Heading</label>
                                <input type="text" class="form-control" id="email1" name="heading" value="{{$featureservice->heading}}">
                                @if($errors->has('heading'))
                                <div class="error text-danger">{{ $errors->first('heading') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Paragraph</label>
                                <input type="text" class="form-control" id="email1" name="paragraph" value="{{$featureservice->paragraph}}">
                                @if($errors->has('paragraph'))
                                <div class="error text-danger">{{ $errors->first('paragraph') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Point 1</label>
                                <input type="text" class="form-control" id="email1" name="point1" value="{{$featureservice->point1}}">
                                @if($errors->has('point1'))
                                <div class="error text-danger">{{ $errors->first('point1') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Point 1</label>
                                <input type="text" class="form-control" id="email1" name="point2" value="{{$featureservice->point2}}">
                                @if($errors->has('point2'))
                                <div class="error text-danger">{{ $errors->first('point2') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Point 1</label>
                                <input type="text" class="form-control" id="email1" name="point3" value="{{$featureservice->point3}}">
                                @if($errors->has('point3'))
                                <div class="error text-danger">{{ $errors->first('point3') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Point 1</label>
                                <input type="text" class="form-control" id="email1" name="point4" value="{{$featureservice->point4}}">
                                @if($errors->has('point4'))
                                <div class="error text-danger">{{ $errors->first('point4') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Link </label>
                                <input type="text" class="form-control" id="email1" name="link" value="{{$featureservice->link}}">
                                @if($errors->has('link'))
                                <div class="error text-danger">{{ $errors->first('link') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email"> Image</label>
                                <input type="file" class="form-control" name="image" id="fileInput">
                                <img src="{{asset('website-images/servicepage/'.$featureservice->image)}}" style="width:100px;height:100px;"></a>
                              <br>  <span class="text-danger">(Note-JPG,PNG,JPEG,Size-1MB,Min_Dim-450X450,Max_Dim-600X600)</span>
                                @if($errors->has('image'))
                                <div class="error text-danger">{{ $errors->first('image') }}</div>
                            @endif
                            <div id="message" class="text-danger"></div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="form-label" for="email">Status</label>
                                <select name="status" class="form-select" aria-label="Default select example">
                                    <option >Status</option>
                                    <option value="1" {{ $featureservice->status == 1 ? 'selected' : '' }}>Active </option>
                                    <option value="0" {{ $featureservice->status == 0 ? 'selected' : '' }}>Inactive </option>
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