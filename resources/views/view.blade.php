<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@foreach($user as $usr)







 <div class="widget-content-left flex2">
        <div class="widget-heading">{{$usr->name}}</div>
           </div>

           
           {{ json_decode($usr->qualification->monthlyIncome, true)[1] }}

     @endforeach
</body>
</html>
