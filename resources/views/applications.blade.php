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
/* List */
ul {
  counter-reset: index;  
  padding: 0;
  max-width: 300px;
}
body{
    background-color: #080710;
}
/* List element */
li {
  counter-increment: index; 
  display: flex;
  align-items: center;
  padding: 12px 0;
  box-sizing: border-box;
}


/* Element counter */
li::before {
  content: counters(index, ".", decimal-leading-zero);
  font-size: 1.5rem;
  text-align: right;
  font-weight: bold;
  min-width: 50px;
  padding-right: 12px;
  font-variant-numeric: tabular-nums;
  align-self: flex-start;
  background-image: linear-gradient(to bottom, aquamarine, orangered);
  background-attachment: fixed;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}



/* Element separation */
li + li {
  border-top: 1px solid rgba(255,255,255,0.2);
}

@use postcss-preset-env {
  stage: 0;
  autoprefixer: {
    grid: true;
  }
  browsers: last 2 versions
}

.header{
  display: flex;
  width: 100%;
  height: 100px;
  justify-content: space-between;
}
</style>

<div class="header">
    <a href="/"><h1 style="color: lightblue">Events</h1></a>
</div>
    <h1 style="color: white">Angemeldete Personen:</h1>
 
        @foreach($applications as $application)
            <li style="color: white">{{ $application -> first_name }} {{ $application -> last_name }}</li>
        @endforeach

    <small style="color: white">Anzahl der Personen die nicht kommen: {{$declinedApplications}}</small>

</body>
</html>