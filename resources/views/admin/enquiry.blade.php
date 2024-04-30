@extends('admin.layout.app')

@section('maincontent')
<div class="container-fluid content-inner pb-0">
    <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between border-0 m-3">
               <div class="header-title ">
                  <h4 class="card-title">Enquiry Message    </h4>
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
               <a href="{{url('messagedata')}}" class="btn btn-success">Export</a>
             </div>
            </div>
            
            <div class="card-body p-0">
               <div class="table-responsive">
                  <div id="search_list"> </div>
                  <table id="basic-table" class="table table-striped table-shadow mb-0" role="grid">
                     <thead class="border-0">
                        <tr>
                           <th>ID</th>
                           <th>First Name</th>
                           <th>Last Name</th>
                           <th>Email</th>
                           <th>Message</th>
                           <th>Created At</th>
                           <th>Updated At</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($enquiry as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->fname}} </td>
                            <td>{{$item->lname}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->message}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->updated_at}}</td>
                            <td>
                             <a href="mailto:{{$item->email}}" class="btn btn-info"><i class="fa-solid fa-envelope"></i></a>
                             
                            </td>
                         </tr>   
                        @endforeach
                        
                       
                        {{-- <tr>
                           <th>Total </th>
                           <td>{{$author}}</td>
                           <td>{{$count}}</td>
                        </tr> --}}
                     </tbody>
                    
                  </table>
                  {!! $enquiry->appends(['sort' => 'department'])->links() !!}
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection