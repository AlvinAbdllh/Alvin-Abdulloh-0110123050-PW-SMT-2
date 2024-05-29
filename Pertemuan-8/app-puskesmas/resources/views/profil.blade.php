@php
  $username ='Alvin Abdulloh';
  $role ='Admin';
@endphp

@if ($role == 'Admin')
    <h3> Selamat Datang , {{ $username}}! Anda  Adalah seeorang {{ $role }}</h3>
@else
    <h3> Selamat Datang , {{ $username}}! Anda  Adalah seeorang User</h3>
@endif
