<h1>Header Page</h1>

@php
    $value = 'Hello'
@endphp

{{-- It will include the file & array data when the condition is true --}}
@includeWhen(empty($value),'pages.main',['names'=>[1=>'Shubrajit',2=>'Trishnanjit',3=>'Biswajit',4=>'Uma']])

{{-- It will include the file & array data when the condition is false --}}
@includeUnless(empty($value),'pages.main',['names'=>[1=>'Shubrajit',2=>'Trishnanjit',3=>'Biswajit',4=>'Uma']])
@include('pages.footer')

{{-- It will include the file if it exist --}}
@includeIf('pages.css')
