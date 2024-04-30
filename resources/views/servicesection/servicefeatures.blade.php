@extends('admin.layout.app')

@section('maincontent')
<div class="container-fluid content-inner pb-0">
    <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between border-0 m-3">
               <div class="header-title ">
                  <h4 class="card-title">service Details  </h4>
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
                  <a href="{{url('addfeatures')}}" class="btn btn-info">Add Features</a>
              </div>
            </div>
            
            <div class="card-body p-0">
               <div class="table-responsive">
                  <div id="search_list"></div>
                  <table id="basic-table" class="table table-striped table-shadow mb-0" role="grid">
                     <thead class="border-0">
                        <tr>
                           <th>ID</th>
                            <th>Title</th>
                            <th>Heading</th>
                            <th>Paragraph</th>
                            <th>Point1</th>
                            <th>Point2</th>
                            <th>Point3</th>
                            <th>Point4</th>
                            <th>Link</th>
                            <th>Image</th>
                           <th>Status</th>
                           <th>Updated At</th>
                           <th>Created at</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody> 
                         @foreach($servicefeature as $service)
                        <tr>
                           <td>{{$service->id}}</td>
                            <td>{{$service->title}}</td>
                           <th>{{$service->heading}}</th>
                           <th>{{$service->paragraph}}</th>
                           <th>{{$service->point1}}</th>
                           <th>{{$service->point2}}</th>
                           <th>{{$service->point3}}</th>
                           <th>{{$service->point4}}</th>
                           <th>{{$service->link}}</th>
                           <td><a href="{{asset('website-images/servicepage/'.$service->image)}}">
                              <img src="{{asset('website-images/servicepage/'.$service->image)}}" style="width:100px;height:100px;"></a></td>
                          <td>@if ($service->status == 1)
                           active
                           @else
                           Inactive
                           @endif</td>
                           <td>{{$service->created_at}}</td>
                           <td>{{$service->updated_at}}</td>
                           <td>
                            <a href="{{'updateservice/'.$service->id}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                        </tr>  
                       @endforeach
                       
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection