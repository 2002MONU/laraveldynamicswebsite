@extends('admin.layout.app')

@section('maincontent')
<div class="container-fluid content-inner pb-0">
    <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between border-0 m-3">
               <div class="header-title ">
                  <h4 class="card-title">About Details  </h4>
               </div>
                     @if(Session('success'))
                        <span class="alert alert-success" role="alert">{{session('success')}}</span>
                        @endif
                        @if(Session('error'))
                        <span class="alert alert-danger" role="alert">{{session('error')}}</span>
                        @endif
                        <div class="header-title ">
                            {{-- <input type="text" name="search" id="search"  class="form-control" placeholder="Search Books"> --}}
                           
                            {{-- <button type="submit" class="btn btn-secondary"> Search</button> --}}
                         </div>
               <div class="header-title ">
               {{-- <a href="{{url('admin/addbook')}}" class="btn btn-success">Add Book</a> --}}
             </div>
            </div>
            
            <div class="card-body p-0">
               <div class="table-responsive">
                  <div id="search_list"> </div>
                  <table id="basic-table" class="table table-striped table-shadow mb-0" role="grid">
                     <thead class="border-0">
                        <tr>
                           <th>ID</th>
                           <th>Title</th>
                           <th>Heading</th>
                           <th>Paragraph </th>
                           <th>Question 1</th>
                           <th>Answer 1</th>
                           <th>Question 2</th>
                           <th>Answer 2</th>
                           <th>Question 3</th>
                           <th>Answer 3</th>
                           <th>Created At</th>
                           <th>Updated At</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                         <tr>
                           <td>{{$faq->id}}</td>
                           <td> {{$faq->title}}</td>
                           <td>{{$faq->heading}}</td>
                           <td>{{$faq->paragraph}}</td>
                           <td>{{$faq->faqq1}}</td>
                           <td>{{$faq->faqans1}}</td>
                           <td>{{$faq->faqq2}}</td>
                           <td>{{$faq->faqans2}}</td>
                           <td>{{$faq->faqq3}}</td>
                           <td>{{$faq->faqans3}}</td>
                           <td>{{$faq->created_at}}</td>
                           <td>{{$faq->updated_at}}</td>
                           <td>
                            <a href="{{'faqupdate/'.$faq->id}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                            
                        </td>
                        </tr>  
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection