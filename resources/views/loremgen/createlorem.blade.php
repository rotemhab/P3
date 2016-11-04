<!DOCTYPE html>
<html>
<head>
    <title>Create Lorem Ipsum</title>
    <meta charset='utf-8'>
    <link href="/css/style.css" type='text/css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
    <a href='/'>back</a>
    <div class="main">
        <h1>Lorem Ipsum Generator</h1>
        <form method='POST'action='/loremgen'>
          {{ csrf_field() }}
          <label for="parnum">How many paragraphs would you like to create?</label>
          <input maxlength="2" name="parnum" type="text" value="6" id="parnum"> (Max: 99)
            <br>
            <input type="submit" value="Generate!">
        </form>
        @if(count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <br>
        {!! lorem($parnum) !!}
    </div>
</body>
</html>