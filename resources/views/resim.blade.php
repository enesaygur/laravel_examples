<html>
<head>
    <title>Resim Upload Sayfası </title>
</head>
<body>
<form action="{{route("resimyukle")}}" method="post" enctype="multipart/form-data">
    @csrf
    <label>Resim Seçiniz</label><br/>
    <input type="file" name="resim"><br/>
    <input type="submit" name="ilet" value="Resim Yükle">
</form>
</body>
</html>
