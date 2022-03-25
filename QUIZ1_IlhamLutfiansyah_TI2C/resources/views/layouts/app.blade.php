<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Flower Shop</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap">
            @section('header')
                @include('layouts.inc.header')
            @show
            
            @yield('content')
  <!--end of center content-->
            @section('footer')
                @include('layouts.inc.footer')
            @show
</div>
</body>
</html>
