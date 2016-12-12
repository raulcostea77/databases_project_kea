@extends('layouts.master')
@section('content')

<div class="row">
        <div class="large-10 large-push-1 columns">
            <form role="search">
                          <div class="form-group">
                            <input id="searchbar" type="text" class="form-control" placeholder="Search" name="search" data-list=".col-md-2">
                          </div>
            </form>
            <div class="row links">
                <div class="large-2 columns">
                    <a href={{ url('/creators') }}>Creators</a>
                </div>
                <div class="large-2 columns">
                    <a href={{ url('/collections') }}>Collections</a>
                </div>
                 <div class="large-2 columns">
                    <a href={{ url('/origins') }}>Origins</a>
                </div>
                 <div class="large-2 columns">
                    <a href={{ url('/materials') }}>Materials</a>
                </div>
                 <div class="large-2 columns">
                    <a href={{ url('/categories') }}>Categories</a>
                </div>
                <div class="large-2 columns">
                    <a href={{ url('/catalogues') }}>Catalogues</a>
                </div>
            </div>

            <div class="artistsList">
            	<ul>
            	@foreach ($origins as $origin)
					<a href="/origins/{{$origin->id}}"><li>{{$origin->name}}</li></a>
            	@endforeach
            	</ul>
            	<div class="row">
        <div class="large-10 large-push-1 columns">
            <a href="{{$origins->previousPageUrl()}}" style="float:left">Previous Page</a>
            <a href="{{$origins->nextPageUrl()}}" style="float:right">Next Page</a>
            </div>
        </div>
</div>
@endsection
