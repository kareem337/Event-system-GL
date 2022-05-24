@extends('layouts.admin-layout')
@section('title')
Scan Code
@endsection
@section('content')

<script src="{{ asset('js/fetchdata.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<br><br>
<div class="container">
    @if(session()->has('success'))
      <div class="alert alert-success">
          {{ session()->get('success') }}
      </div>
    @endif
    
    @if (session()->has('failure'))
      <div class="alert alert-danger">
        {{ session()->get('failure') }}
    </div>
    @endif

  <form action="scan_submit"  method="POST">
  @csrf
    <div class="form-group">
      <label for="player code">Player Code</label>
      <input type="text" class="form-control" id="code" name="code" placeholder="Enter the code" /required>
    </div>
    <div class="form-group">
        <label for="game">Game</label>
        <select class="form-control" name="game" id="game" required>
            <option selected disabled>---Select an option---</option>
            @foreach($games as $game) 
             <option value="{{$game->id}}">{{$game->game}}</option>
            @endforeach 
          </select>
    </div>
     </select>
     <div class="form-group">
        <label for="devices">Devices</label>
        <select class="form-control" name="device" id="device" required>
            <option val="0">---Select an option---</option>
          </select>
    </div> 
    <div class="form-group">
        <label for="time">Time</label>
        <select class="form-control" name="time" id="time" required>
            <option val="0">---Select an option---</option>
          </select>
    </div> 
    <button type="submit" class="btn btn-primary">Scan</button>
  </form>
</div>
  @include('layouts.footer')
@endsection
