<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form method = "POST" action="{{ route('test.section.one') }}">
    @csrf
    @foreach ($errors->all() as $error)
        <li><span class="error">{{ $error }}</span></li>
    @endforeach
    <p>
      名前 : <input type="text" name="name" value="{{ old('name') }}">
    </p>
    <p>
      メアド : <input type="text" name="mail" value="{{ old('mail') }}">
    </p>
    <p>
      歳 : <input type="text" name="age" value="{{ old('age') }}">
    </p>
    <button type="submit">送信</button>
  </form>
</body>
</html>