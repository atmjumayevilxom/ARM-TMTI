<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('asset/css/index.css') }}">
   @include('book.layout.master')
</head>

<body>
@include('book.layout.navbar')
@include('product.book')
@include('book.layout.footer')

</body>

</html>
