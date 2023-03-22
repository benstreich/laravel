<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Applications</title>
</head>
<body>

    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

p {
    font-size: 24px;
    margin: 20px 0;
    text-align: center;
}

ul {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    list-style-type: none;
    margin: 20px auto;
    max-width: 500px;
    padding: 20px;
}

li {
    font-size: 18px;
    margin: 10px 0;
}

small {
    display: block;
    font-size: 14px;
    margin: 20px auto;
    text-align: center;
}</style>


    <p>Angemeldete Personen:</p>
    <ul>
        @foreach($applications as $application)
            <li>{{ $application -> first_name }} {{ $application -> last_name }}</li>
        @endforeach
    </ul>

    <small>Anzahl der Personen die nicht kommen: {{$declinedApplications}}</small>
</body>
</html>