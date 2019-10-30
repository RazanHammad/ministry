@extends('dashboard.print.layout')
@section('content')
<center>
	<br><br>
<a href="/printpro/pdf/{{$user->id}}">Export PDF</a>

<h1>طباعة بيانات الأشخاص</h1>
<table width="400" border="1" class="table" >
<tr><th>Id</th><th>Name</th><th>Project Name</th><th>projectField</th></tr>
@foreach($project as $pro)

<td>{{ pro->projectName }}</td>
<td>{{ pro->projectField }}</td>

@endforeach
</table>
<br>
<table width="400" border="1" class="table">
<tr><th>projectType</th><th>projectTitle</th><th>projectDetails</th><th>projectNeeds</th></tr>
<tr><td>{{ $user->project->projectType }}</td>
<td>{{ $user->project->projectTitle }}</td>
<td>{{ $user->project->projectDetails }}</td>
<td>{{ $user->project->projectNeeds }}</td></tr>



</table>
<br>
<table width="400" border="1" class="table">
<tr><th>projectReason</th><th>projetStatus</th><th>projectNoPerson</th><th>projectStartDate</th></tr>
<tr>
<td>{{$user->project->projectReason}}</td>
<td>1-{{$user->project->projetStatus}}</td>
	<td>{{$user->project->projectNoPerson}}</td>
<td>{{$user->project->projectStartDate}}</td></tr>
</table>
<br>
<table width="400" border="1" class="table">
<tr><th>projectCost</th><th>projectThingsCost</th></tr>
<tr>
<td>{{$user->project->projectCost}}</td>
<td>{{$user->project->projectThingsCost}}</td>



</table>

</center>
@endsection