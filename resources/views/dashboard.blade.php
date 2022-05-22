@extends('layouts.admin-layout')
@section('title')
Dashboard
@endsection
@section('content') 
<br><br>
{{-- <table> --}}
		<div class="container-fluid">
			<table id="schedule" class="table table-striped table-bordered nowrap" style="width:100%">
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
        <script src="{{ asset('js/dashboard-datatable.js') }}" ></script>
@endsection
