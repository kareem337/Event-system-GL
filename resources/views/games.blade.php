@extends('layouts.admin-layout')
@section('title')
Games
@endsection
@section('content')
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

  <form action="add_game" method="POST">
  @csrf
    <div class="form-group">
      <label for="game">Game</label>
      <input type="text" class="form-control" id="game" name="game" placeholder="Enter the game" /required>
    </div>
    <div class="form-group">
      <label for="time">Date-Time</label>
      <input type="datetime-local" class="form-control" id="time" name="datetime" placeholder="Enter the time" /required>
    </div>
    <div class="form-group">
      <label for="slot">Slot</label>
      <input type="number" class="form-control" id="slot" name="slot" placeholder="Enter the slot" /required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  @include('layouts.footer')
@endsection
