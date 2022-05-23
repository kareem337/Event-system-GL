@extends('layouts.admin-layout')
@section('title')
Matches
@endsection
@section('content') 
<br><br>
{{-- <table> --}}
		<div class="container-fluid" >
			<table id="schedule"class="table table-striped table-dark table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>ID</th>
						<th>Player 1</th>
						<th>Player 2</th>
						<th>Game</th>
						<th>Date-Time</th>
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
          <td>{{$match->datetime}}</td>
          <td> <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Add"><i class="fa fa-table"></i></button>
          </li><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
        </li></td>
        </tr>
        @endforeach
				</tbody>
			</table>
		</div>
		<footer style="position: absolute; bottom:0px; width: 100%;">
		@include('layouts.footer')
		</footer>
        <script src="{{ asset('js/dashboard-datatable.js') }}" ></script>
@endsection

