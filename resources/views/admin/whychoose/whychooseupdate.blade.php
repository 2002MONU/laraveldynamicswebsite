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
                        <form action="{{url('admin/whyupdate',$whychoose->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="email">Title Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="title" id="email1" value="{{$whychoose->title}}">
                                @if($errors->has('title'))
                                <div class="error text-danger">{{ $errors->first('title') }}</div>
                            @endif
                            {{-- <span class="text-danger">You Write Only 30 Words</span> --}}
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="heading">Heading <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="heading" name="heading" value="{{$whychoose->heading}}">
                                @if($errors->has('heading'))
                                <div class="error text-danger">{{ $errors->first('heading') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="Paragraph">Paragraph <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="Paragraph" name="paragraph" value="{{$whychoose->paragraph}}">
                                @if($errors->has('paragraph'))
                                <div class="error text-danger">{{ $errors->first('paragraph') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">whychose Image 1 <span class="text-danger"> ( PNG,JPG,JPEG,SIZE-1MB,Min_dim-30X30,Max_dim-40X40)</span></label>
                                <input type="file" class="form-control" name="image1" id="fileInput">
                                <a href="{{asset('website-images/whyimages/'.$whychoose->image1)}}">
                                    <img src="{{asset('website-images/whyimages/'.$whychoose->image1)}}" style="width:70px;height:70px;"></a>
                                @if($errors->has('image1'))
                                <div class="error text-danger">{{ $errors->first('image1') }}</div>
                            @endif
                            <div id="message" class="text-danger"></div>   
                        </div>
                            <div class="form-group">
                                <label class="form-label" for="email">whychose Image 2 <span class="text-danger"> ( PNG,JPG,JPEG,SIZE-1MB,Min_dim-30X30,Max_dim-40X40)</span></label>
                                <input type="file" class="form-control" name="image2" id="fileInput">
                                <a href="{{asset('website-images/whyimages/'.$whychoose->image2)}}">
                                    <img src="{{asset('website-images/whyimages/'.$whychoose->image2)}}" style="width:70px;height:70px;"></a>
                                @if($errors->has('image2'))
                                <div class="error text-danger">{{ $errors->first('image2') }}</div>
                            @endif
                            <div id="message" class="text-danger"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">whychose Image 3 <span class="text-danger"> (PNG,JPG,JPEG,SIZE-1MB,Min_dim-30X30,Max_dim-40X40)</span></label>
                                <input type="file" class="form-control" name="image3" id="fileInput">
                                <a href="{{asset('website-images/whyimages/'.$whychoose->image3)}}">
                                    <img src="{{asset('website-images/whyimages/'.$whychoose->image3)}}" style="width:70px;height:70px;"></a>
                                @if($errors->has('image3'))
                                <div class="error text-danger">{{ $errors->first('image3') }}</div>
                            @endif
                            <div id="message" class="text-danger"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="Paragraph">YEARS OF EXPERIENCE <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="Paragraph" name="yoexp" value="{{$whychoose->yoexp}}">
                                @if($errors->has('yoexp'))
                                <div class="error text-danger">{{ $errors->first('yoexp') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="Paragraph">SATISFIED CUSTOMERS <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="Paragraph" name="sacustomer" value="{{$whychoose->sacustomer}}">
                                @if($errors->has('sacustomer'))
                                <div class="error text-danger">{{ $errors->first('sacustomer') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="Paragraph">COUNTRIES WE SERVED  <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="Paragraph" name="couwsur" value="{{$whychoose->couwsur}}">
                                @if($errors->has('couwsur'))
                                <div class="error text-danger">{{ $errors->first('couwsur') }}</div>
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