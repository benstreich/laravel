
<!DOCTYPE html>
<html>
  <head>
    <title>Simple registration form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>

     .header{
  display: flex;
  width: 100%;
  height: 100px;
  justify-content: space-between;
}


body{
    background-color: #080710;
}

button{
    margin-top: 50px;
    width: 20%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}


    

    </style>
  </head>
  <body>

     <div class="header">
     <a href="/"><h1 style="color: lightblue">Events</h1></a>
    <a href="/login"><h1 style="color: lightgreen"></h1></a>
    <a href="/register"><h1 style="color: orange"></h1></a>
    </div>


    <div class="main-block">
      <h1 style="color: white">{{$event -> title}}</h1>
      <p style="color: white">{{$event -> description}}</p> <br>
      <p style="color: white">Date: {{$event -> date}}</p>

      <form method="post" action="?">
        @csrf
        <hr>
          <input type="radio" value="yes" id="answer1" name="answer" checked/>
          <label for="answer1" class="radio" style="color: white">Available</label>
          <input type="radio" value="no" id="answer2" name="answer" />
          <label for="answer2" class="radio" style="color: white">Unavailable</label>
        <hr> 
       
        <label  for="name"></label>
        <input type="text" name="last_name" id="last_name" placeholder="Last name" required/>
        <label  for="first_name"></label>
        <input type="text" name="first_name" id="first_name" placeholder="First name" required/>
        <label  for="email"></label>
        <input type="text" name="email" id="email" placeholder="Email" required/>
        <div class="btn-block">

          <p style="color: white; padding-top:20px">By clicking Register, you agree on our <a href="https://www.youtube.com/watch?v=tvkxupwbFLk">Privacy Policy</a>.</p>
          <button type="submit" href="/">Register</button>
        </div>
      </form>

    </div>
  </body>
</html>
