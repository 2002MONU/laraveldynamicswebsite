@extends('admin.layout.app')
@section('maincontent')
    
<div class="container-fluid content-inner pb-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Service Nrture Banner  section</h4>
                        </div>
                        @if(Session('success'))
                        <span class="alert alert-success" role="alert">{{session('success')}}</span>
                        @endif
                        @if(Session('error'))
                        <span class="alert alert-danger" role="alert">{{session('error')}}</span>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{url('nrturebannerfill',$nrturebanner->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="email">Heading Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="heading" id="email1" value="{{$nrturebanner->heading}}">
                                @if($errors->has('heading'))
                                <div class="error text-danger">{{ $errors->first('heading') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Background Image </label>
                                <input type="file" class="form-control" name="image" id="fileInput">
                                <a href="{{asset('website-images/servicepage/'.$nrturebanner->image)}}">
                                <img src="{{asset('website-images/servicepage/'.$nrturebanner->image)}}" style="width:100px;height:100px;"></a><br>
                                <span class="text-danger">(Note-JPG,PNG,JPEG,Size-1MB,Min_Dim-1600X1000,Max_Dim-2000X1300)</span>
                                @if($errors->has('bgimage'))
                                <div class="error">{{ $errors->first('bgimage') }}</div>
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