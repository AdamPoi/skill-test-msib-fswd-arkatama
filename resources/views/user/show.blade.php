 @if ($user)
     Nama : {{ $user->name }} <br>
     Usia : {{ $user->age }} <br>
     Kota : {{ $user->city }} <br>
 @else
     <p>tidak ada user</p>
 @endif
