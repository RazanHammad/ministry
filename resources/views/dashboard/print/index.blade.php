@extends('dashboard.print.layout')
@section('content')
<center>
	<br><br>
<a href="/print/pdf/{{$user->id}}">Export PDF</a>

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
<tr><th>الخبرات العملية </th><td colspan="3">1-{{$user->qualification->experience[0]}}</td></tr>
<tr><th></th><td colspan="3">2-{{$user->qualification->experience[1]}}</td></tr>
<tr><th>الدخل الشهري ومصادره</th><td colspan="3">{{$user->qualification->monthlyIncome[0]}} - {{$user->qualification->IncomeSource[0]}}</td></tr>
<tr><th></th><td colspan="3">{{$user->qualification->monthlyIncome[1]}} - {{$user->qualification->IncomeSource[1]}}</td></tr>
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
<tr><td>{{$f1->Operationalcatagory[0]}}</td><td>{{$f1->Operationalunit[0]}}</td><td>{{$f1->Operationalnumber[0]}}</td><td>{{$f1->OperationalunitCost[0]}}</td><td>{{$f1->Operationalsource[0]}}</td></tr>
<tr><td>{{$f1->Operationalcatagory[1]}}</td><td>{{$f1->Operationalunit[1]}}</td><td>{{$f1->Operationalnumber[1]}}</td><td>{{$f1->OperationalunitCost[1]}}</td><td>{{$f1->Operationalsource[1]}}</td></tr>
<tr><td>{{$f1->Operationalcatagory[2]}}</td><td>{{$f1->Operationalunit[2]}}</td><td>{{$f1->Operationalnumber[2]}}</td><td>{{$f1->OperationalunitCost[2]}}</td><td>{{$f1->Operationalsource[2]}}</td></tr>
<tr><td>{{$f1->Operationalcatagory[3]}}</td><td>{{$f1->Operationalunit[3]}}</td><td>{{$f1->Operationalnumber[3]}}</td><td>{{$f1->OperationalunitCost[3]}}</td><td>{{$f1->Operationalsource[3]}}</td></tr>
<tr><td>{{$f1->Operationalcatagory[4]}}</td><td>{{$f1->Operationalunit[4]}}</td><td>{{$f1->Operationalnumber[4]}}</td><td>{{$f1->OperationalunitCost[4]}}</td><td>{{$f1->Operationalsource[4]}}</td></tr>
</table>


	
<br>
<h1>جدول التكاليف التشغيلية</h1>
	<table  width="400" border="1">

<tr><th>الصنف</th><th>العدد</th><th>الوحدة</th><th>سعر الوحدة</th><th>المصدر</th></tr>
<tr><td>{{$f1->Operationalcatagory[0]}}</td><td>{{$f1->Operationalnumber[0]}}</td><td>{{$f1->Operationalunit[0]}}</td><td>{{$f1->OperationalunitCost[0]}}</td><td>{{$f1->Operationalsource[0]}}</td></tr>
<tr><td>{{$f1->Operationalcatagory[1]}}</td><td>{{$f1->Operationalnumber[1]}}</td><td>{{$f1->Operationalunit[1]}}</td><td>{{$f1->OperationalunitCost[1]}}</td><td>{{$f1->Operationalsource[1]}}</td></tr>
<tr><td>{{$f1->Operationalcatagory[2]}}</td><td>{{$f1->Operationalnumber[2]}}</td><td>{{$f1->Operationalunit[2]}}</td><td>{{$f1->OperationalunitCost[2]}}</td><td>{{$f1->Operationalsource[2]}}</td></tr>
<tr><td>{{$f1->Operationalcatagory[3]}}</td><td>{{$f1->Operationalnumber[3]}}</td><td>{{$f1->Operationalunit[3]}}</td><td>{{$f1->OperationalunitCost[3]}}</td><td>{{$f1->Operationalsource[3]}}</td></tr>
<tr><td>{{$f1->Operationalcatagory[4]}}</td><td>{{$f1->Operationalnumber[4]}}</td><td>{{$f1->Operationalunit[4]}}</td><td>{{$f1->OperationalunitCost[4]}}</td><td>{{$f1->Operationalsource[4]}}</td></tr>
</table>

<br>
<h1>جدول العمال</h1>
	<table  width="400" border="1">

<tr><th>نوع العمال</th><th>العدد</th><th>الأجر الشهري</th><th>ملاحظات</th></tr>
<tr><td>{{$f1->workerType[0]}}</td><td>{{$f1->workerNumber[0]}}</td><td>{{$f1->workercost[0]}}</td><td>{{$f1->notes[0]}}</td></tr>
<tr><td>{{$f1->workerType[1]}}</td><td>{{$f1->workerNumber[1]}}</td><td>{{$f1->workercost[1]}}</td><td>{{$f1->notes[1]}}</td></tr>
<tr><td>{{$f1->workerType[2]}}</td><td>{{$f1->workerNumber[2]}}</td><td>{{$f1->workercost[2]}}</td><td>{{$f1->notes[2]}}</td></tr>
<tr><td>{{$f1->workerType[3]}}</td><td>{{$f1->workerNumber[3]}}</td><td>{{$f1->workercost[3]}}</td><td>{{$f1->notes[3]}}</td></tr>
<tr><td>{{$f1->workerType[4]}}</td><td>{{$f1->workerNumber[4]}}</td><td>{{$f1->workercost[4]}}</td><td>{{$f1->notes[4]}}</td></tr>
</table>

<br>

<h1>جدول المنتجات</h1>

	<table  width="400" border="1">

<tr><th>الصنف </th><th>العدد</th><th>الوحدة </th><th>سعر الوحدة</th><th>لمن ستبيع المنتج</th></tr>
<tr><td>{{$f1->productCatagory[0]}}</td><td>{{$f1->productNumber[0]}}</td><td>{{$f1->productUnit[0]}}</td><td>{{$f1->productUnitCost[0]}}</td><td>{{$f1->productGoal[0]}}</td></tr>
<tr><td>{{$f1->productCatagory[1]}}</td><td>{{$f1->productNumber[1]}}</td><td>{{$f1->productUnit[1]}}</td><td>{{$f1->productUnitCost[1]}}</td><td>{{$f1->productGoal[1]}}</td></tr>
<tr><td>{{$f1->productCatagory[2]}}</td><td>{{$f1->productNumber[2]}}</td><td>{{$f1->productUnit[2]}}</td><td>{{$f1->productUnitCost[2]}}</td><td>{{$f1->productGoal[2]}}</td></tr>
<tr><td>{{$f1->productCatagory[3]}}</td><td>{{$f1->productNumber[3]}}</td><td>{{$f1->productUnit[3]}}</td><td>{{$f1->productUnitCost[3]}}</td><td>{{$f1->productGoal[3]}}</td></tr>
<tr><td>{{$f1->productCatagory[4]}}</td><td>{{$f1->productNumber[4]}}</td><td>{{$f1->productUnit[4]}}</td><td>{{$f1->productUnitCost[4]}}</td><td>{{$f1->productGoal[4]}}</td></tr>
</table>
@endforeach


</center>
@endsection