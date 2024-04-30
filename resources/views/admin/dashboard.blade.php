@extends('admin.layout.app')
@section('maincontent')
 <div class="container-fluid content-inner pb-0">
    <div class="row mb-4">
       <div class="col-lg-12">
         @if(Session('success'))
          <span class="alert alert-success">{{session('success')}}</span>
            @endif
            @if(Session('error'))
            <span class="alert alert-danger">{{session('session')}}</span>
            @endif
             <div class="row align-items-center">
                <div class="col-xl-12  d-md-block">
                   <div class="card mb-0">
                      <div class="card-body row">
                       
                        <div class="col-lg-3 col-md-6">
                           <div class="card bg-info-subtle">
                              <div class="card-body">
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="bg-primary-subtle rounded p-3">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor">
                                          <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                       </svg>
                                    </div>
                                    <div class="text-end">
                                          <h2 class="counter"> {{$enquiry}}</h2>
                                       Total Enquiry
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <div class="card bg-info-subtle">
                              <div class="card-body">
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="bg-primary-subtle rounded p-3">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor">
                                          <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                       </svg>
                                    </div>
                                    <div class="text-end">
                                          <h2 class="counter"> {{$contact}}</h2>
                                       Total Contact
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                      </div>
                   </div>     
                </div>      
               
             </div>
       </div>
    </div>
 
     
   
          
              
               
               
              
                    
           @endsection