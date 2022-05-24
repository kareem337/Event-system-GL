@extends('layouts.admin-layout')
@section('title')
Score
@endsection
@section('content')
<br><br>
<div class="container">
  <form action="add_score" method="POST">
  @csrf
    <div class="form-group">
      <label for="p1">Player 1</label>
      <input type="text" class="form-control" id="p1_score" name="p1_score" placeholder="Enter player one score" /required>
    </div>
    <div class="form-group">
        <label for="p2">Player 2</label>
        <input type="text" class="form-control" id="p2_score" name="p2_score" placeholder="Enter player two score" /required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  @include('layouts.footer')
@endsection
