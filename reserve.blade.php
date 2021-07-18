@extends('layout')
@section('reserve')
<form id="form2" method="post" action="{{route("reserve")}}">
  @csrf
    <div id="shema">
    <label>KundeNummer</label><br>
     <input type="text" name="id_user" @if(Auth::user())value="{{Auth::user()->id}}" @endif><br>
     <label>KundeNamen</label><br>
     <input type="text" name="Name_user"><br>
     <label>Tischnumber</label><br>
     <select name="Num_tisch">
         <option>1</option>
         <option>2</option>
         <option>3</option>
         <option>4</option>
         <option>5</option>
         <option>6</option>
         <option>7</option>
         <option>8</option>
         <option>9</option>
         <option>10</option>
     </select><br>
      <label>Date</label><br>
     <input type="date" name="Date"><br>
     <label>Uhr</label><br>
     <input type="time" name="Uhr"><br>
     <button type="submit">reservieren</button><br>
    
   </div>
 </form>
@endsection