<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
<div class="wrapper">
    <div class="container-fluid">
        @yield('content')
    </div>
</div>
@include('layout.script')
</body>
</html>
