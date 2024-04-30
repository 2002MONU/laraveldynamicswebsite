@extends('admin.layout.app')
@section('maincontent')
    
<div class="container-fluid content-inner pb-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Faq section</h4>
                        </div>
                        @if(Session('success'))
                        <span class="alert alert-success" role="alert">{{session('success')}}</span>
                        @endif
                        @if(Session('error'))
                        <span class="alert alert-danger" role="alert">{{session('error')}}</span>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/fupdate',$faq->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="email">Title Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="title" id="email1" value="{{$faq->title}}">
                                @if($errors->has('title'))
                                <div class="error text-danger">{{ $errors->first('title') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="heading">Heading <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="heading" name="heading" value="{{$faq->heading}}">
                                @if($errors->has('heading'))
                                <div class="error text-danger">{{ $errors->first('heading') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="Paragraph">Paragraph <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="Paragraph" name="paragraph" value="{{$faq->paragraph}}">
                                @if($errors->has('paragraph'))
                                <div class="error text-danger">{{ $errors->first('paragraph') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="Paragraph2">Question 1 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="Paragraph2" name="faqq1" value="{{$faq->faqq1}}">
                                @if($errors->has('faqq1'))
                                <div class="error text-danger">{{ $errors->first('faqq1') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Answer 1 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="faqans1" value="{{$faq->faqans1}}">
                                @if($errors->has('faqans1'))
                                <div class="error text-danger">{{ $errors->first('faqans1') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="Paragraph2">Question 2 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="Paragraph2" name="faqq2" value="{{$faq->faqq2}}">
                                @if($errors->has('faqq2'))
                                <div class="error text-danger">{{ $errors->first('faqq2') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Answer 2 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="faqans2" value="{{$faq->faqans2}}">
                                @if($errors->has('faqans2'))
                                <div class="error text-danger">{{ $errors->first('faqans2') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="Paragraph2">Question 3 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="Paragraph2" name="faqq3" value="{{$faq->faqq3}}">
                                @if($errors->has('faqq3'))
                                <div class="error text-danger">{{ $errors->first('faqq3') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Answer 3 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="faqans3" value="{{$faq->faqans3}}">
                                @if($errors->has('faqans3'))
                                <div class="error text-danger">{{ $errors->first('faqans3') }}</div>
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