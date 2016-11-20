@extends('layouts.master')

@section('content')
	<div class="container">
    <div class="row">
        <div class="large-12 columns">
         
		
				
           			@foreach ($materials as $material)
							
           				<p>{{$material->id}}</p>
           				<p>{{$material->name}}</p>
           				<p>{{$material->description}}</p>
						
					@endforeach

					
					
			
				
        </div>
    </div>
    </div>	

@endsection