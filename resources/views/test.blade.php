<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>
<body>
    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">File: </label>
            <input type="file" name="file" placeholder="File">
            @error('file')
            <div class="alert alert-danger">Falta archivo</div>
            @enderror
        </div>
        
        <button>Enviar</button>
    </form>
</body>
</html>