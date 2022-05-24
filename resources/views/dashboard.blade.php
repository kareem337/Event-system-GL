@extends('layouts.admin-layout')
@section('title')
Dashboard
@endsection
@section('content') 
{{-- <br><br><br> --}}
<div class="content-wrapper" style="margin-top: 2%;">
	<div class="container-fluid">
	  <div class="card mb-3">
		<div class="card-header">
		  <i class="fa fa-table"></i> Matches Data</div>
			<div class="card-body">
			<div class="table-responsive">
				<table id="schedule" class="table table-striped table-dark table-bordered nowrap" style="width:100%">
					<thead>
						<tr>
							<th>ID</th>
							<th>Player 1</th>
							<th>Player 2</th>
							<th>Game</th>
							<th>Date-Time</th>
						</tr>
					</thead>
					<tbody>
			@foreach($matches as $match)
			<tr>
			<td>{{$match->id}}</td>
			<td>{{$match->player1}}</td>
			<td>{{$match->player2}}</td>
			<td>{{$match->match_game_type->game}}</td>  
			<td>{{$match->datetime}}</td>
			</tr>
			@endforeach
					</tbody>
				</table>
		</div>
	</div>
  </div>
</div>  
		@include('layouts.footer')
        <script src="{{ asset('js/datatable.js') }}" ></script>
@endsection

