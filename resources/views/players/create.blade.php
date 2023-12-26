<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('players.store') }}" method="POST">
        @csrf
    
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
    
        <div>
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" required>
        </div>
    
        <div>
            <label for="rating">Rating:</label>
            <input type="number" name="rating" id="rating" required>
        </div>
    
        <button type="submit">Create Player</button>
    </form>
    
</body>
</html>
