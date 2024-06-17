<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>
    <h1>Form Submission Results</h1>
    <!-- variable data = gets all input data -->
    <p>Name: {{ $data['name'] }}</p>
    <p>Favorite Color: {{ $data['favorite_color'] }}</p>
    <p>Consent: {{ isset($data['consent']) ? 'Yes' : 'No' }}</p>

    <h2>App Name: {{ config('app.name') }}</h2>
</body>
</html>

