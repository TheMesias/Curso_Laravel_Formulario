<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>
<body>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <div>
            <label for="">Nombre</label>
            <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}">
            @error('name')
            <div class="alert alert-danger">Falta llenar</div>
            @enderror
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
            <div class="alert alert-danger">Falta llenar</div>
            @enderror
        </div>
        <div>
            <label for="">Mensaje</label>
            <textarea name="message" placeholder="Mensaje" value="{{ old('message') }}"></textarea>
            @error('message')
            <div class="alert alert-danger">Falta llenar</div>
            @enderror
        </div>
        <button>Enviar</button>
    </form>
</body>
</html>