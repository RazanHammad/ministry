@extends('dashboard.print.layout')
@section('content')
<center>
	<br><br>
<a href="/printpro/pdf/{{$user->id}}">Export PDF</a>

<h1>طباعة بيانات الأشخاص</h1>
<table width="400" border="1" class="table" >
<tr><th>Id</th><th>Name</th><th>Email</th><th>birthDate</th></tr>
<tr><td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>{{$user->person->birthDate}}</td></tr>
</table>
<br>
<table width="400" border="1" class="table">
<tr><th>status</th><th>noChild</th><th>husbandName</th><th>husbandWork</th></tr>
<tr><td>{{ $user->status }}</td>
<td>{{ $user->noChild }}</td>
<td>{{ $user->husbandName }}</td>
<td>{{$user->person->husbandWork}}</td></tr>



</table>
<br>
<table width="400" border="1" class="table">
<tr><th>Qualification</th><th>experience</th><th>idNo</th><th>sex</th></tr>
<tr>
<td>{{$user->person->qualificatin}}</td>
<td>1-{{$user->qualification->experience[0]}} - 2-{{$user->qualification->experience[1]}}</td>
	<td>{{$user->person->idNo}}</td>
<td>{{$user->person->sex}}</td></tr>
</table>
<br>
<table width="400" border="1" class="table">
<tr><th>address</th><th>phone</th><th>mobile</th></tr>
<tr>
<td>{{$user->person->address}}</td>
<td>{{$user->person->phone}}</td>
<td>{{$user->person->mobile}}</td></tr>


</table>

<table width="400" border="1" class="table"> 
<tr><th>monthlyIncome</th><th>IncomeSource</th><th>major</th></tr>
<tr>
<td>{{$user->qualification->monthlyIncome[0]}} - {{$user->qualification->IncomeSource[0]}}</td>
<td>{{$user->qualification->monthlyIncome[1]}} - {{$user->qualification->IncomeSource[1]}}</td>
<td>{{$user->qualification->major}}</td></tr>

</table>
</center>
@endsection