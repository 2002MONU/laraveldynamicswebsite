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
                        <form action="{{url('admin/addn')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group">
                                <label class="form-label" for="email">Heading <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="email1" name="heading" >
                                @if($errors->has('heading'))
                                <div class="error text-danger">{{ $errors->first('heading') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Date <span class="text-danger">* (only number are allowed)</span></label>
                                <input type="text" class="form-control" id="email1" name="date" >
                                @if($errors->has('date'))
                                <div class="error text-danger">{{ $errors->first('date') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Months,Year <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="email1" name="month" >
                                @if($errors->has('month'))
                                <div class="error text-danger">{{ $errors->first('month') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email"> Image </label>
                                <input type="file" class="form-control" name="image">
                                <span class="text-danger">(PNG,JPG,JPEG SIZE-1MB,MIN_Dim-330X230,Max_Dim-430X300)</span>
                                @if($errors->has('image'))
                                <div class="error text-danger">{{ $errors->first('image') }}</div>
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