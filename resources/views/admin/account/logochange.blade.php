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
                        <form action="{{url('admin/changelogo',$logo->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="email">Email  <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" id="email1" value="{{$logo->email}}">
                                @if($errors->has('email'))
                                <div class="error text-danger">{{ $errors->first('email') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="heading">Contact Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="phoneNumber" oninput="validatePhoneNumber()" name="phone" value="{{$logo->phone}}">
                                <div id="phoneError" style="color: red;"></div>
                                @if($errors->has('phone'))
                                <div class="error text-danger">{{ $errors->first('phone') }}</div>
                            @endif
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="email">Logo Image </label>
                                <input type="file" class="form-control" name="logo" id="fileInput">
                                <a href="{{asset('website-images/logoimage/'.$logo->logo)}}"><img src="{{asset('website-images/logoimage/'.$logo->logo)}}" style="width:150px;height:50px;"></a><br>
                                <span class="text-danger"> ( PNG,JPG,JPEG,SIZE-1MB,Min_dim-200X30,Max_Dim-300X50)</span>
                                @if($errors->has('logo'))
                                <div class="error text-danger">{{ $errors->first('logo') }}</div>
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