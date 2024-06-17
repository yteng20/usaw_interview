<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
    <form method="POST" action="{{ route('submit-form') }}">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="favorite_color">Favorite Color:</label><br>
        <select id="favorite_color" name="favorite_color">
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="yellow">Yellow</option>
        </select><br><br>

        <label for="consent">
            <input type="checkbox" id="consent" name="consent">
            I acknowledge I am submitting this for
        </label><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>

