@extends('dashboard.print.layout')
@section('content')
<center>
	<br><br>
<a href="/printpro/pdf/{{$user->id}}">Export PDF</a>

<h1>طباعة بيانات الأشخاص</h1>
<table width="400" border="1" class="table" >
<tr><th>Id</th><th>Name</th><th>Project Name</th><th>projectField</th></tr>

</table>
<br>
<table width="400" border="1" class="table">
<tr><th>projectType</th><th>projectTitle</th><th>projectDetails</th><th>projectNeeds</th></tr>
<tr><td>{{ $project->projectType[0] }}</td>
</tr>



</table>


</center>
@endsection