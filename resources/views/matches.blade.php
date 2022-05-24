@extends('layouts.admin-layout')
@section('title')
Matches
@endsection
@section('content') 

<div class="content-wrapper" style="margin-top: 2%;">
	<div class="container-fluid">
		@if(Session::has('status'))
			<div id="response_message" class="alert alert-dark" role="alert">
				{{ Session::get('status') }}
			</div>
		@endif
		@csrf
	  <div class="card mb-3">
		<div class="card-header">
		  <i class="fa fa-table"></i> Matches Data</div>
			<div class="card-body">
			<div class="table-responsive">
				<div class="container-fluid" >
					<table id="schedule"class="table table-striped table-dark table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>ID</th>
								<th>Player 1</th>
								<th>Player 2</th>
								<th>Game</th>
								<th>Time (H-M-S)</th>
								<th>Status</th>
								<th>Links</th>
							</tr>
						</thead>
						<tbody>
				@foreach($matches as $match)
				<tr>
				<td>{{$match->id}}</td>
				<td>{{$match->player1}}</td>
				<td>{{$match->player2}}</td>
				<td>{{$match->match_game_type->game}}</td> 
				{{-- extract time from datetime field  --}}
				<td>{{Carbon\Carbon::parse($match->datetime)->format('H:i:s')}}</td>

				@if($match->status == '1')
					<td>Started</td> 
				@elseif ($match->status == '0')
					<td>Ended</td> 
				@endif
				
				<td> <a href="/matches/start/{{$match->id}}" class="btn btn-primary btn-sm rounded-0"  data-toggle="tooltip" data-placement="top" title="Start"><i class="fa fa-play"></i></a>
				</li><a href="/matches/end/{{$match->id}}"class="btn btn-danger btn-sm rounded-0" data-toggle="tooltip" data-placement="top" title="Stop"><i class="fa fa-stop"></i></a>
				</li></td>
				</tr>
				@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	  </div>
	</div>  
	@include('layouts.footer')	
    <script src="{{ asset('js/datatable.js') }}" ></script>
@endsection

