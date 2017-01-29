<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar
        @show
        <div class='container'>
             @yield('content')
        </div>
    </body>
</html>
