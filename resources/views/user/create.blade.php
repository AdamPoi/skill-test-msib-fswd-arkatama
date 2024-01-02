<!DOCTYPE html>
<html>

<head>
    <title>Test Arkatama</title>
</head>

<body>
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <input type="text" name="biodata" placeholder="NAMA[spasi]USIA[spasi]KOTA" required="required">
        <button type='submit'>Simpan</button>
    </form>

</body>

</html>
