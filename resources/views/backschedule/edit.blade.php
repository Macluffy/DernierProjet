@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Edit schedule</h1>
    </div>
    @if ($errors->any())
<div class="alert alert-danger" >
    <ul>
        @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    
</div>
@endif
    <form action="{{ route('schedule.update',$schedule->id) }}" style="margin-left:50px" method="post"  enctype="multipart/form-data">
    @method('put')
    @csrf
        
      
          
        
        <div class="mb-3">
          <label  class="form-label">Time</label>
          <input type="text" class="form-control" style="width: 25%" name="time" value="{{  $schedule->time  }}" >
          
        </div> 

        <select class="form-select mb-3 " name="jour1_id" style="width: 25%" aria-label="Default select example">
          <option  selected  >Jour 1</option>
          <option value="{{1}}">Saturday 23-10-21</option>
          <option value="{{2}}">Sunday 24-10-21</option>
          <option value="{{3}}">Monday 25-10-21</option>
          <option value="{{4}}">Tuesday 26-10-21</option>
          <option value="{{5}}">Wednesday 27-10-21</option>
          <option value="{{6}}">Thursday 28-10-21</option>
          <option value="{{7}}">Friday 29-10-21</option>
          <option value="{{8}}">Saturday 30-10-21</option>
          <option value="{{9}}">Sunday 31-10-21</option>
          <option value="{{10}}">Monday 01-11-21</option>
          <option value="{{11}}">Tuesday 02-11-21</option>
          <option value="{{12}}">Wednesday 03-11-21</option>
          <option value="{{13}}">Thursday 04-11-21</option>
          <option value="{{14}}">Friday 05-11-21</option>
          <option value="{{15}}">Saturday 06-11-21</option>
          <option value="{{16}}">Sunday 07-11-21</option>
          <option value="{{17}}">Monday 08-11-21</option>
          <option value="{{18}}">Tuesday 09-11-21</option>
          <option value="{{19}}">Wednesday 10-11-21</option>
          <option value="{{20}}">Thursday 11-11-21</option>
          <option value="{{21}}">Friday 12-11-21</option>
      </select>
      <select class="form-select mb-3 " name="jour2_id" style="width: 25%" aria-label="Default select example">
        <option  selected  >Jour 2</option>
        <option value="{{1}}">Saturday 23-10-21</option>
        <option value="{{2}}">Sunday 24-10-21</option>
        <option value="{{3}}">Monday 25-10-21</option>
        <option value="{{4}}">Tuesday 26-10-21</option>
        <option value="{{5}}">Wednesday 27-10-21</option>
        <option value="{{6}}">Thursday 28-10-21</option>
        <option value="{{7}}">Friday 29-10-21</option>
        <option value="{{8}}">Saturday 30-10-21</option>
        <option value="{{9}}">Sunday 31-10-21</option>
        <option value="{{10}}">Monday 01-11-21</option>
        <option value="{{11}}">Tuesday 02-11-21</option>
        <option value="{{12}}">Wednesday 03-11-21</option>
        <option value="{{13}}">Thursday 04-11-21</option>
        <option value="{{14}}">Friday 05-11-21</option>
        <option value="{{15}}">Saturday 06-11-21</option>
        <option value="{{16}}">Sunday 07-11-21</option>
        <option value="{{17}}">Monday 08-11-21</option>
        <option value="{{18}}">Tuesday 09-11-21</option>
        <option value="{{19}}">Wednesday 10-11-21</option>
        <option value="{{20}}">Thursday 11-11-21</option>
        <option value="{{21}}">Friday 12-11-21</option>
    </select>
    <select class="form-select mb-3 " name="jour3_id" style="width: 25%" aria-label="Default select example">
      <option  selected  >Jour 3</option>
      <option value="{{1}}">Saturday 23-10-21</option>
      <option value="{{2}}">Sunday 24-10-21</option>
      <option value="{{3}}">Monday 25-10-21</option>
      <option value="{{4}}">Tuesday 26-10-21</option>
      <option value="{{5}}">Wednesday 27-10-21</option>
      <option value="{{6}}">Thursday 28-10-21</option>
      <option value="{{7}}">Friday 29-10-21</option>
      <option value="{{8}}">Saturday 30-10-21</option>
      <option value="{{9}}">Sunday 31-10-21</option>
      <option value="{{10}}">Monday 01-11-21</option>
      <option value="{{11}}">Tuesday 02-11-21</option>
      <option value="{{12}}">Wednesday 03-11-21</option>
      <option value="{{13}}">Thursday 04-11-21</option>
      <option value="{{14}}">Friday 05-11-21</option>
      <option value="{{15}}">Saturday 06-11-21</option>
      <option value="{{16}}">Sunday 07-11-21</option>
      <option value="{{17}}">Monday 08-11-21</option>
      <option value="{{18}}">Tuesday 09-11-21</option>
      <option value="{{19}}">Wednesday 10-11-21</option>
      <option value="{{20}}">Thursday 11-11-21</option>
      <option value="{{21}}">Friday 12-11-21</option>
  </select>
  <select class="form-select mb-3 " name="jour4_id" style="width: 25%" aria-label="Default select example">
    <option  selected  >Jour 4</option>
    <option value="{{1}}">Saturday 23-10-21</option>
    <option value="{{2}}">Sunday 24-10-21</option>
    <option value="{{3}}">Monday 25-10-21</option>
    <option value="{{4}}">Tuesday 26-10-21</option>
    <option value="{{5}}">Wednesday 27-10-21</option>
    <option value="{{6}}">Thursday 28-10-21</option>
    <option value="{{7}}">Friday 29-10-21</option>
    <option value="{{8}}">Saturday 30-10-21</option>
    <option value="{{9}}">Sunday 31-10-21</option>
    <option value="{{10}}">Monday 01-11-21</option>
    <option value="{{11}}">Tuesday 02-11-21</option>
    <option value="{{12}}">Wednesday 03-11-21</option>
    <option value="{{13}}">Thursday 04-11-21</option>
    <option value="{{14}}">Friday 05-11-21</option>
    <option value="{{15}}">Saturday 06-11-21</option>
    <option value="{{16}}">Sunday 07-11-21</option>
    <option value="{{17}}">Monday 08-11-21</option>
    <option value="{{18}}">Tuesday 09-11-21</option>
    <option value="{{19}}">Wednesday 10-11-21</option>
    <option value="{{20}}">Thursday 11-11-21</option>
    <option value="{{21}}">Friday 12-11-21</option>
</select>
<select class="form-select mb-3 " name="jour5_id" style="width: 25%" aria-label="Default select example">
  <option  selected  >Jour 5</option>
  <option value="{{1}}">Saturday 23-10-21</option>
  <option value="{{2}}">Sunday 24-10-21</option>
  <option value="{{3}}">Monday 25-10-21</option>
  <option value="{{4}}">Tuesday 26-10-21</option>
  <option value="{{5}}">Wednesday 27-10-21</option>
  <option value="{{6}}">Thursday 28-10-21</option>
  <option value="{{7}}">Friday 29-10-21</option>
  <option value="{{8}}">Saturday 30-10-21</option>
  <option value="{{9}}">Sunday 31-10-21</option>
  <option value="{{10}}">Monday 01-11-21</option>
  <option value="{{11}}">Tuesday 02-11-21</option>
  <option value="{{12}}">Wednesday 03-11-21</option>
  <option value="{{13}}">Thursday 04-11-21</option>
  <option value="{{14}}">Friday 05-11-21</option>
  <option value="{{15}}">Saturday 06-11-21</option>
  <option value="{{16}}">Sunday 07-11-21</option>
  <option value="{{17}}">Monday 08-11-21</option>
  <option value="{{18}}">Tuesday 09-11-21</option>
  <option value="{{19}}">Wednesday 10-11-21</option>
  <option value="{{20}}">Thursday 11-11-21</option>
  <option value="{{21}}">Friday 12-11-21</option>
</select>
<select class="form-select mb-3 " name="jour6_id" style="width: 25%" aria-label="Default select example">
  <option  selected  >Jour 6</option>
  <option value="{{1}}">Saturday 23-10-21</option>
  <option value="{{2}}">Sunday 24-10-21</option>
  <option value="{{3}}">Monday 25-10-21</option>
  <option value="{{4}}">Tuesday 26-10-21</option>
  <option value="{{5}}">Wednesday 27-10-21</option>
  <option value="{{6}}">Thursday 28-10-21</option>
  <option value="{{7}}">Friday 29-10-21</option>
  <option value="{{8}}">Saturday 30-10-21</option>
  <option value="{{9}}">Sunday 31-10-21</option>
  <option value="{{10}}">Monday 01-11-21</option>
  <option value="{{11}}">Tuesday 02-11-21</option>
  <option value="{{12}}">Wednesday 03-11-21</option>
  <option value="{{13}}">Thursday 04-11-21</option>
  <option value="{{14}}">Friday 05-11-21</option>
  <option value="{{15}}">Saturday 06-11-21</option>
  <option value="{{16}}">Sunday 07-11-21</option>
  <option value="{{17}}">Monday 08-11-21</option>
  <option value="{{18}}">Tuesday 09-11-21</option>
  <option value="{{19}}">Wednesday 10-11-21</option>
  <option value="{{20}}">Thursday 11-11-21</option>
  <option value="{{21}}">Friday 12-11-21</option>
</select>
<select class="form-select mb-3 " name="jour7_id" style="width: 25%" aria-label="Default select example">
  <option  selected  >Jour 7</option>
  <option value="{{1}}">Saturday 23-10-21</option>
  <option value="{{2}}">Sunday 24-10-21</option>
  <option value="{{3}}">Monday 25-10-21</option>
  <option value="{{4}}">Tuesday 26-10-21</option>
  <option value="{{5}}">Wednesday 27-10-21</option>
  <option value="{{6}}">Thursday 28-10-21</option>
  <option value="{{7}}">Friday 29-10-21</option>
  <option value="{{8}}">Saturday 30-10-21</option>
  <option value="{{9}}">Sunday 31-10-21</option>
  <option value="{{10}}">Monday 01-11-21</option>
  <option value="{{11}}">Tuesday 02-11-21</option>
  <option value="{{12}}">Wednesday 03-11-21</option>
  <option value="{{13}}">Thursday 04-11-21</option>
  <option value="{{14}}">Friday 05-11-21</option>
  <option value="{{15}}">Saturday 06-11-21</option>
  <option value="{{16}}">Sunday 07-11-21</option>
  <option value="{{17}}">Monday 08-11-21</option>
  <option value="{{18}}">Tuesday 09-11-21</option>
  <option value="{{19}}">Wednesday 10-11-21</option>
  <option value="{{20}}">Thursday 11-11-21</option>
  <option value="{{21}}">Friday 12-11-21</option>
</select>

<select class="form-select mb-3 " name="h1" style="width: 25%" aria-label="Default select example">
  <option  selected  >heure 1</option>
  <option value="8:00 AM">8:00 AM</option>
  <option value="12:00 AM">12:00 AM</option>
  <option value="3:00 PM">3:00 PM</option>
  <option value="6:00 PM">6:00 PM</option>
</select>
<select class="form-select mb-3 " name="h2" style="width: 25%" aria-label="Default select example">
  <option  selected  >heure 2</option>
  <option value="8:00 AM">8:00 AM</option>
  <option value="12:00 AM">12:00 AM</option>
  <option value="3:00 PM">3:00 PM</option>
  <option value="6:00 PM">6:00 PM</option>
</select>
<select class="form-select mb-3 " name="h3" style="width: 25%" aria-label="Default select example">
  <option  selected  >heure 3</option>
  <option value="8:00 AM">8:00 AM</option>
  <option value="12:00 AM">12:00 AM</option>
  <option value="3:00 PM">3:00 PM</option>
  <option value="6:00 PM">6:00 PM</option>
</select>
<select class="form-select mb-3 " name="h4" style="width: 25%" aria-label="Default select example">
  <option  selected  >heure 4</option>
  <option value="8:00 AM">8:00 AM</option>
  <option value="12:00 AM">12:00 AM</option>
  <option value="3:00 PM">3:00 PM</option>
  <option value="6:00 PM">6:00 PM</option>
</select>
        
        
          
          <div style="margin-top:30px; margin-left:120px">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        
    </form>
        
    </div>
@endsection