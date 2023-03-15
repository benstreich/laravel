<title>Applications</title>
</head>
<body>
    <h1>Applications</h1>
    <p>Here's a list of all applications</p>
    <p>Angemeldete Personen:</p>
    <ul>
        
        @foreach($applications as $application)
            <li>{{ $application -> firstname }} {{ $application -> lastname }}</li>
        @endforeach 
    </ul>

    <small>Anzahl der Personen die nicht kommen: {{$declinedapplications}}</small>
</body>
</html>

<!-- Danke dafür timmy :)