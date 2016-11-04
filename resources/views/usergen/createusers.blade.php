<!DOCTYPE html>
<html>
<head>
    <title>Create Users</title>
    <meta charset='utf-8'>
    <link href="/css/style.css" type='text/css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
    <a href='/'>back</a> 
    <div class='main'>
        <h1>User Generator</h1>
        <form method="POST" action='/usergen'>
        {{ csrf_field() }}
            <label for="usernum">How many users?<br></label>
        <input maxlength="2" name="usernum" type="text" value="8" id="usernum"> (Max: 99)
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

        <?php echo $names ?>
    </div>
</body>
</html>