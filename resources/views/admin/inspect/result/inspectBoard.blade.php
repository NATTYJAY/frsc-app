@extends('layouts.admin')

@section('content')

<div class="card card-outline-success">
	 @if(count($drivers_all)<1)
	 			<div class="alert alert-danger" role="alert">
	 		 		<div class="text-center">
                        <h4 class="text-center"> Sorry <b>'{{ $query }}'</b> is not Registered </h4>
                    </div>
				</div>
	@else

		<div class="card-header">
                    <h4 class="m-b-0 text-white">Vehicle Inspection for <b>{{$drivers_all[0]->fname . " " . $drivers_all[0]->lname}}</b></h4></div>

                <div class="card-body">
		                <div class="row">
		                    
		                   
		                    <!-- <div class="col-md-6 col-lg-4 col-xlg-2">
		                    	 <a href="{{ URL::to('/search/registerItem/'.$drivers_all[0]->id) }}">
		                        <div class="card">
		                            <div class="box bg-info text-center">
		                                <h1 class="font-light text-white"><span class="fa fa-drivers-license-o "> Register Item </span></h1>
		                            </div>
		                        </div>
		                        </a>
		                    </div> -->
		               
		            
		                    <div class="col-md-6 col-lg-6 col-xlg-6">
		                    	 <a href="{{ URL::to('search/register/'.$drivers_all[0]->id) }}">
		                        <div class="card">
		                            <div class="box bg-primary text-center">
		                                <h1 class="font-light text-white"><span class="fa fa-truck "> Register Vehicle </span></h1>
		                                
		                            </div>
		                        </div>
		                    </a>
		                    </div>
		                 
		                    <div class="col-md-6 col-lg-6 col-xlg-6">
		                   <a href="{{ URL::to('/search/inspect/'.$drivers_all[0]->id) }}">
		                        <div class="card">
		                            <div class="box bg-success text-center">
		                                <h1 class="font-light text-white"><span class="fa fa-cog"> Inspect Vehicle </span></h1>
		                                
		                            </div>
		                        </div>
		                    </a>
		                    </div>
		                   
		                   <!--  <div class="col-md-12 col-lg-12 col-xlg-12">
		                    	 <a href="{{ URL::to('/search/update/'.$drivers_all[0]->id) }}">
		                        <div class="card">
		                            <div class="box bg-dark text-center">
		                                <h1 class="font-light text-white"><span class="fa fa-cog"> Update Item </span></h1>
		                               
		                            </div>
		                        </div>
		                         </a>
		                    </div> -->
		                    <!-- Column -->
		                   <!--  <div class="col-md-6 col-lg-4 col-xlg-2">
		                    	<a href="#">
		                        <div class="card">
		                            <div class="box bg-megna text-center">
		                                <h1 class="font-light text-white"> <span class="fa fa-linode"> Possession</span> </h1>
		                               
		                            </div>
		                        </div>
		                    </a>
		                    </div> -->
		                    <!-- Column -->
		                  <!--   <div class="col-md-6 col-lg-4 col-xlg-2">
		                    	<a href="{{ URL::to('/check/') }}">
		                        <div class="card">
		                            <div class="box bg-warning text-center">
		                                <h1 class="font-light text-white"> <span class="fa fa-linode"> </h1></span>
		                            </div>
		                        </div>
		                    </a>
		                    </div> -->
						</div>
                </div> 
            </div>
                   
    @endif
            
</div>            






@stop