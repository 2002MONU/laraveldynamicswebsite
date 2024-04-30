@extends('admin.layout.app')

@section('maincontent')
<div class="container-fluid content-inner pb-0">
    <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between border-0 m-3">
               <div class="header-title ">
                  <h4 class="card-title">Why Choose Us  Details  </h4>
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
                           <th>Image 1</th>
                           <th>Image 2</th>
                           <th>Image 3</th>
                           <th>YEARS OF EXPERIENCE</th>
                           <th>SATISFIED CUSTOMERS </th>
                           <th>COUNTRIES WE SERVED </th>
                           <th>Created At</th>
                           <th>Updated At</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        
                        <tr>
                           <td>{{$whychose->id}}</td>
                           <td> {{$whychose->title}}</td>
                           <td>{{$whychose->heading}}</td>
                           <td>{{$whychose->paragraph}}</td>
                           <td><a href="{{asset('website-images/whyimages/'.$whychose->image1)}}">
                              <img src="{{asset('website-images/whyimages/'.$whychose->image1)}}" style="width:60px;height:60px;"></a></td>
                              <td><a href="{{asset('website-images/whyimages/'.$whychose->image2)}}">
                                 <img src="{{asset('website-images/whyimages/'.$whychose->image2)}}" style="width:60px;height:60px;"></a></td>
                                 <td><a href="{{asset('website-images/whyimages/'.$whychose->image3)}}">
                                    <img src="{{asset('website-images/whyimages/'.$whychose->image3)}}" style="width:60px;height:60px;"></a></td>
                              <td>{{$whychose->yoexp}}</td>
                              <td>{{$whychose->sacustomer}}</td>
                              <td>{{$whychose->couwsur}}</td>
                           <td>{{$whychose->created_at}}</td>
                           <td>{{$whychose->updated_at}}</td>
                           <td>
                            <a href="{{'whychooseupdate/'.$whychose->id}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                            
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