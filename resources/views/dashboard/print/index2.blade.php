@extends('dashboard.print.layout')
@section('content')
<center>
	<br><br>
<a href="/print/pdf/{{$user->id}}">Export PDF</a>

<h1>Print User Information</h1>
<table width="400" border="1"  id="customers">
<tr><th>Id</th><th>Name</th><th>Email</th><th>birthDate</th></tr>
<tr><td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>{{$user->person->birthDate}}</td>
</tr>
</table>
<br>
<table width="400" border="1"   id="customers">
<tr><th>status</th><th>noChild</th><th>husbandName</th><th>husbandWork</th></tr>
<tr><td>{{ $user->status }}</td>
<td>{{ $user->noChild }}</td>
<td>{{ $user->husbandName }}</td>
<td>{{$user->person->husbandWork}}</td></tr>



</table>
<br>
<table width="400" border="1"   id="customers">
<tr><th>Qualification</th><th>experience</th><th>idNo</th><th>sex</th></tr>
<tr>
<td>{{$user->person->qualificatin}}</td>
<td>1-{{$user->qualification->experience[0]}} - 2-{{$user->qualification->experience[1]}}</td>
	<td>{{$user->person->idNo}}</td>
<td>{{$user->person->sex}}</td></tr>
</table>
<br>
<table width="400" border="1"  id="customers">
<tr><th>address</th><th>phone</th><th>mobile</th></tr>
<tr>
<td>{{$user->person->address}}</td>
<td>{{$user->person->phone}}</td>
<td>{{$user->person->mobile}}</td></tr>


</table>

<table width="400" border="1"  id="customers"> 
<tr><th>monthlyIncome</th><th>IncomeSource</th><th>major</th></tr>
<tr>
<td>{{$user->qualification->monthlyIncome[0]}} - {{$user->qualification->IncomeSource[0]}}</td>
<td>{{$user->qualification->monthlyIncome[1]}} - {{$user->qualification->IncomeSource[1]}}</td>
<td>{{$user->qualification->major}}</td></tr>

</table>


<table width="400" border="1"  id="customers">
<tr><th>projectName</th><th>projectField</th><th>projectType</th><th>projectTitle</th></tr>	
<tr>
	@foreach($project1 as $pr1)
<td>{{$pr1->projectName}} </td> <td>{{$pr1->projectField}} </td> <td>{{$pr1->projectType}} </td> <td>{{$pr1->projectTitle}}</td>
@endforeach

</tr>
<tr><th>projectDetails</th><th>projectNeeds</th><th>projectReason</th><th>projetStatus</th></tr>	
<tr>
	@foreach($project2 as $pr2)
<td>{{$pr2->projectDetails}} </td> <td>{{$pr2->projectNeeds}} </td> <td>{{$pr2->projectReason}} </td> <td>{{$pr2->projetStatus}}</td>
@endforeach

</tr>
<tr><th>projectNoPerson</th><th>projectStartDate</th><th>projectCost</th><th>projectThingsCost</th></tr>
<tr>
	
@foreach($project3 as $pr3)
<td>{{$pr3->projectNoPerson}} </td> <td>{{$pr3->projectStartDate}} </td> <td>{{$pr3->projectCost}} </td> <td>{{$pr3->projectThingsCost}}</td>
@endforeach

</tr>
</table>
</center>
@endsection