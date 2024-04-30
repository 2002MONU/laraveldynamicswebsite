@extends('admin.layout.app')

@section('maincontent')
<div class="container-fluid content-inner pb-0">
    <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between border-0 m-3">
               <div class="header-title ">
                  <h4 class="card-title">About Home Banner Details  </h4>
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
                           <th>Heading</th>
                            <th>Image</th>
                           <th>Created At</th>
                           <th>Updated At</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>                        
                        <tr>
                           <td>{{$aboutpage->id}}</td>
                           <td>{{$aboutpage->heading}}</td>
                            <td><a href="{{asset('website-images/aboutpage/'.$aboutpage->image)}}"><img src="{{asset('website-images/aboutpage/'.$aboutpage->image)}}" style="width:100px;height:100px;"></a></td>
                           <td>{{$aboutpage->created_at}}</td>
                           <td>{{$aboutpage->updated_at}}</td>
                           <td>
                            <a href="{{'editabout/'.$aboutpage->id}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                            
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