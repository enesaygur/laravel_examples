<html>
<head>
    <title>İletişim Formu</title>
</head>
<body>
<form method="post" action="{{route('iletisim-sonuc')}}">
    @csrf
    <label>Ad Soyad</label><br/>
    <input type="text" name="adsoyad"><br/>
    <label>Mail</label><br/>
    <input type="text" name="mail"><br/>
    <label>Telefon</label><br/>
    <input type="text" name="telefon"><br/>
    <label>Mesaj</label><br/>
    <textarea name="metin" style="width: 300px; height: 200px;"></textarea><br/>
    <input type="submit" name="ilet" value="Gönder">
</form>
</body>
</html>
