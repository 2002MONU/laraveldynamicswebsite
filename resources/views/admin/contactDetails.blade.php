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
               <a href="{{url('contactexport')}}" class="btn btn-success">Export</a>
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
                      
                        @foreach ($contactdetail as $contact)
                        <tr>
                            <td>{{$contact->id}}</td>
                            <td>{{$contact->name}} </td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->service}}</td>
                            <td>{{$contact->message}}</td>
                            <td>{{$contact->created_at}}</td>
                            <td>{{$contact->updated_at}}</td>
                            <td>
                             <a href="mailto:{{$contact->email}}" class="btn btn-info"><i class="fa-solid fa-envelope"></i></a>
                             </td>
                         </tr>   
                        @endforeach
               
                        </tbody>
                  </table>
                  {!! $contactdetail->appends(['sort' => 'department'])->links() !!}
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection