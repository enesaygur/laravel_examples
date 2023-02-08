<html>
<head>
    <title>Üye Kayıt Formu</title>
</head>
<body>
@if($errors->any())
    <ul>
    @foreach($errors->all() as $hatalar)
        <li>{{$hatalar}}</li>
    @endforeach
    </ul>
@endif
<form method="post" action="{{route('uyekayit')}}">
    @csrf
    <label>Ad Soyad</label><br/>
    <input type="text" name="adsoyad"><br/>
    <label>Mail</label><br/>
    <input type="text" name="mail"><br/>
    <label>Telefon</label><br/>
    <input type="text" name="telefon"><br/>
    <input type="submit" name="ilet" value="Gönder">
</form>
</body>
</html>
