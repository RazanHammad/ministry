@extends('dashboard.print.layout')
@section('content')
<center>
	<br><br>


<h1 > بيانات عامة عن صاحب المشروع</h1>
<table width="400" border="1"  >
<tr><th width="30%">رقم استمارة طلب القرض</th><td>{{ $user->id }}</td><th>التاريخ</th><td></td></tr>
<tr><th>اسم صاحب المشروع</th><td colspan="3">{{ $user->name }}</td></tr>
<tr><th>رقم الهوية</th><td>{{$user->person->idNo}}</td><th>تاريخ الميلاد</th><td>{{$user->person->birthDate}}</td></tr>
<tr><th>الجنس</th><td>{{$user->person->sex}}</td><th>عنوان السكن</th><td>{{$user->person->address}}</td></tr>
<tr><th>هاتف</th><td>{{$user->person->phone}}</td><th>جوال</th><td>{{$user->person->mobile}}</td></tr>
<tr><th>البريد الالكتروني</th><td colspan="3">{{$user->email}}</td></tr>
<tr><th>الحالة الاجتماعية</th><td>{{ $user->status }}</td><th>عدد المعالين</th><td>{{ $user->noChild }}</td></tr>
<tr><th>اسم الزوجة</th><td>{{ $user->person->husbandName }}</td><th>عمل الزوجة</th><td>{{$user->person->husbandWork}}</td></tr>

<tr><th >المؤهل العلمي</th><td colspan="3">{{$user->person->qualificatin}}</td></tr>
<tr><th>الخبرات العملية </th><td colspan="3">1-{{json_decode($user->qualification->experience,true)[0]}}</td></tr>
<tr><th></th><td colspan="3">2-{{json_decode($user->qualification->experience,true)[1]}}</td></tr>
<tr><th>الدخل الشهري ومصادره</th><td colspan="3">{{json_decode($user->qualification->monthlyIncome,true)[0]}} - {{json_decode($user->qualification->IncomeSource,true)[0]}}</td></tr>
<tr><th></th><td colspan="3">{{json_decode($user->qualification->monthlyIncome,true)[1]}} - {{json_decode($user->qualification->IncomeSource,true)[1]}}</td></tr>
</table>
<br>

<h1 >بيانات عن المشروع</h1>
<table width="400" border="1"   >
@foreach($project1 as $pr1)
<tr><th width="30%">اسم المشروع</th><td width="70%" >{{$pr1->projectName}}</td></tr>
<tr><th>مجال العمل</th><td  width="70%" >{{$pr1->projectField}}</td></tr>
<tr><th>نوع المشروع</th><td width="70%">{{$pr1->projectType}}</td></tr>
<tr><th>عنوان المشروع</th><td width="70%">{{$pr1->projectTitle}}</td></tr>
<tr><th>فكرة عامة عن المشروع </th><td width="70%">{{$pr1->projectDetails}}</td></tr>
<tr><th>مهارات عامة يتطلبها المشروع وطرق توفيرها</th><td width="70%">{{$pr1->projectNeeds}}</td></tr>
<tr><th>سبب اختيار المشروع</th><td width="70%">{{$pr1->projectReason}}</td></tr>
<tr><th>حالة المشروع</th><td width="70%">{{$pr1->projetStatus}}</td></tr>
<tr><th>عدد العاملين في المشروع</th><td width="70%">{{$pr1->projectNoPerson}}</td></tr>
<tr><th>تاريخ بدء العمل في المشروع</th><td width="70%">{{$pr1->projectStartDate}}</td></tr>
<tr><th>رأسمال المشروع</th><td width="70%">{{$pr1->projectCost}}</td></tr>
<tr><th>قيمة الموجودات في المشروع</th><td width="70%">{{$pr1->projectThingsCost}}</td></tr>
@endforeach
</table>
<br>



@foreach($feas1 as $f1)

<h1>جدول الالات والمعدات</h1>


<table  width="400" border="1"  >
	<tr><th>اسم المشروع</th><th>{{$f1->project->projectName}}</th></tr>
<tr><th>الصنف</th><th>الوحدة</th><th>العدد</th><th>سعر الوحدة</th><th>المصدر</th></tr>
<tr><td>{{$f1->Operationalcatagory[0]}}</td><td>{{json_decode($f1->Operationalunit,true)[0]}}</td><td>{{json_decode($f1->Operationalnumber,true)[0]}}</td><td>{{json_decode($f1->OperationalunitCost,true)[0]}}</td><td>{{json_decode($f1->Operationalsource,true)[0]}}</td></tr>
<tr><td>{{$f1->Operationalcatagory[1]}}</td><td>{{json_decode($f1->Operationalunit,true)[1]}}</td><td>{{json_decode($f1->Operationalnumber,true)[1]}}</td><td>{{json_decode($f1->OperationalunitCost,true)[1]}}</td><td>{{json_decode($f1->Operationalsource,true)[1]}}</td></tr>
<tr><td>{{$f1->Operationalcatagory[2]}}</td><td>{{json_decode($f1->Operationalunit,true)[2]}}</td><td>{{json_decode($f1->Operationalnumber,true)[2]}}</td><td>{{json_decode($f1->OperationalunitCost,true)[2]}}</td><td>{{json_decode($f1->Operationalsource,true)[2]}}</td></tr>
<tr><td>{{$f1->Operationalcatagory[3]}}</td><td>{{json_decode($f1->Operationalunit,true)[3]}}</td><td>{{json_decode($f1->Operationalnumber,true)[3]}}</td><td>{{json_decode($f1->OperationalunitCost,true)[3]}}</td><td>{{json_decode($f1->Operationalsource,true)[3]}}</td></tr>
<tr><td>{{$f1->Operationalcatagory[4]}}</td><td>{{json_decode($f1->Operationalunit,true)[4]}}</td><td>{{json_decode($f1->Operationalnumber,true)[4]}}</td><td>{{json_decode($f1->OperationalunitCost,true)[4]}}</td><td>{{json_decode($f1->Operationalsource,true)[4]}}</td></tr>
</table>


	
<br>
<h1>جدول التكاليف التشغيلية</h1>
	<table  width="400" border="1">

<tr><th>الصنف</th><th>العدد</th><th>الوحدة</th><th>سعر الوحدة</th><th>المصدر</th></tr>
<tr><td>{{$f1->Operationalcatagory[0]}}</td><td>{{json_decode($f1->Operationalnumber,true)[0]}}</td><td>{{json_decode($f1->Operationalunit,true)[0]}}</td><td>{{json_decode($f1->OperationalunitCost,true)[0]}}</td><td>{{json_decode($f1->Operationalsource,true)[0]}}</td></tr>
<tr><td>{{$f1->Operationalcatagory[1]}}</td><td>{{json_decode($f1->Operationalnumber,true)[1]}}</td><td>{{json_decode($f1->Operationalunit,true)[1]}}</td><td>{{json_decode($f1->OperationalunitCost,true)[1]}}</td><td>{{json_decode($f1->Operationalsource,true)[1]}}</td></tr>
<tr><td>{{$f1->Operationalcatagory[2]}}</td><td>{{json_decode($f1->Operationalnumber,true)[2]}}</td><td>{{json_decode($f1->Operationalunit,true)[2]}}</td><td>{{json_decode($f1->OperationalunitCost,true)[2]}}</td><td>{{json_decode($f1->Operationalsource,true)[2]}}</td></tr>
<tr><td>{{$f1->Operationalcatagory[3]}}</td><td>{{json_decode($f1->Operationalnumber,true)[3]}}</td><td>{{json_decode($f1->Operationalunit,true)[3]}}</td><td>{{json_decode($f1->OperationalunitCost,true)[3]}}</td><td>{{json_decode($f1->Operationalsource,true)[3]}}</td></tr>
<tr><td>{{$f1->Operationalcatagory[4]}}</td><td>{{json_decode($f1->Operationalnumber,true)[4]}}</td><td>{{json_decode($f1->Operationalunit,true)[4]}}</td><td>{{json_decode($f1->OperationalunitCost,true)[4]}}</td><td>{{json_decode($f1->Operationalsource,true)[4]}}</td></tr>
</table>

<br>
<h1>جدول العمال</h1>
	<table  width="400" border="1">

<tr><th>نوع العمال</th><th>العدد</th><th>الأجر الشهري</th><th>ملاحظات</th></tr>
<tr><td>{{json_decode($f1->workerType,true)[0]}}</td><td>{{json_decode($f1->workerNumber,true)[0]}}</td><td>{{json_decode($f1->workercost,true)[0]}}</td><td>{{json_decode($f1->notes,true)[0]}}</td></tr>
<tr><td>{{json_decode($f1->workerType,true)[1]}}</td><td>{{json_decode($f1->workerNumber,true)[1]}}</td><td>{{json_decode($f1->workercost,true)[1]}}</td><td>{{json_decode($f1->notes,true)[1]}}</td></tr>
<tr><td>{{json_decode($f1->workerType,true)[2]}}</td><td>{{json_decode($f1->workerNumber,true)[2]}}</td><td>{{json_decode($f1->workercost,true)[2]}}</td><td>{{json_decode($f1->notes,true)[2]}}</td></tr>
<tr><td>{{json_decode($f1->workerType,true)[3]}}</td><td>{{json_decode($f1->workerNumber,true)[3]}}</td><td>{{json_decode($f1->workercost,true)[3]}}</td><td>{{json_decode($f1->notes,true)[3]}}</td></tr>
<tr><td>{{json_decode($f1->workerType,true)[4]}}</td><td>{{json_decode($f1->workerNumber,true)[4]}}</td><td>{{json_decode($f1->workercost,true)[4]}}</td><td>{{json_decode($f1->notes,true)[4]}}</td></tr>
</table>

<br>

<h1>جدول المنتجات</h1>

	<table  width="400" border="1">

<tr><th>الصنف </th><th>العدد</th><th>الوحدة </th><th>سعر الوحدة</th><th>لمن ستبيع المنتج</th></tr>
<tr><td>{{json_decode($f1->productCatagory,true)[0]}}</td><td>{{json_decode($f1->productNumber,true)[0]}}</td><td>{{json_decode($f1->productUnit,true)[0]}}</td><td>{{json_decode($f1->productUnitCost,true)[0]}}</td><td>{{json_decode($f1->productGoal,true)[0]}}</td></tr>
<tr><td>{{json_decode($f1->productCatagory,true)[1]}}</td><td>{{json_decode($f1->productNumber,true)[1]}}</td><td>{{json_decode($f1->productUnit,true)[1]}}</td><td>{{json_decode($f1->productUnitCost,true)[1]}}</td><td>{{json_decode($f1->productGoal,true)[1]}}</td></tr>
<tr><td>{{json_decode($f1->productCatagory,true)[2]}}</td><td>{{json_decode($f1->productNumber,true)[2]}}</td><td>{{json_decode($f1->productUnit,true)[2]}}</td><td>{{json_decode($f1->productUnitCost,true)[2]}}</td><td>{{json_decode($f1->productGoal,true)[2]}}</td></tr>
<tr><td>{{json_decode($f1->productCatagory,true)[3]}}</td><td>{{json_decode($f1->productNumber,true)[3]}}</td><td>{{json_decode($f1->productUnit,true)[3]}}</td><td>{{json_decode($f1->productUnitCost,true)[3]}}</td><td>{{json_decode($f1->productGoal,true)[3]}}</td></tr>
<tr><td>{{json_decode($f1->productCatagory,true)[4]}}</td><td>{{json_decode($f1->productNumber,true)[4]}}</td><td>{{json_decode($f1->productUnit,true)[4]}}</td><td>{{json_decode($f1->productUnitCost,true)[4]}}</td><td>{{json_decode($f1->productGoal,true)[4]}}</td></tr>
</table>
@endforeach


</center>
@endsection