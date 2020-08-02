<html>
<head>
<title>@yield('title')</title>
</head>
<body>
@section('header')
<div class="header">
<h1>Header Part</h1>
</div>
@show
<div class="content">
@yield('content')
</div>
@section('footer')
<div class="footer">
<h1>footer Part</h1>
</body>
<style>
.header{
    padding: 20px;
    background-color:antiquewhite;
    text-align:cente;
}
.footer{
    padding: 20px;
    background-color:antiquewhite;
    text-align:cente;
    
}
.content{
    height:500px;
    padding: 20px;
    background-color: #b2a3b9;
    text-align:cente;
}
</style>
</html>
