<html dir="rtl" lang="ar">

<head>
  <meta   charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
<style>/* 
Generic Styling, for Desktops/Laptops 
*/
table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: right; 
}
body {
  font-family: 'DejaVu Sans' ;
}
</style>
</head>

<body>
<div class="container">
<div class="col-md-12">
@yield('content')
</div>
</div>
</body>
</html>