<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
</head>
<body>

 <style>



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

body{
    background-color: #080710;
}
</style>




<main>
<div class="header">
    <a href="/"><h1 style="color: lightblue">Events</h1></a>
   <a href="/login"><h1 style="color: lightgreen">Sign In</h1></a>
   <a href="/register"><h1 style="color: orange">Sign Up</h1></a>
</div>
        @foreach($events as $event)
            <li style="color: white">{{ $event -> title }} <a href="/event/{{$event -> id}}">&emsp;Beitreten</a> </li>
        @endforeach
    
</main>  
</body>
</html>