<html>
<head>
    <title>Örnek Form Sayfası</title>
</head>
<body>
<form method="post" action="{{route('sonuc')}}">
    @csrf
    <textarea name="metin" style="width: 300px; height: 200px;"></textarea><br/>
    <input type="submit" name="ilet" value="Gönder">
</form>
</body>
</html>
