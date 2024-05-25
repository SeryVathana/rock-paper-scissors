<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock Paper Scissors</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            margin-right: 10px;
        }
        button {
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Rock Paper Scissors</h1>
    <form action="{{ route('play') }}" method="POST">
        @csrf
        <label>
            <input type="radio" name="choice" value="rock" required>
            Rock
        </label>
        <label>
            <input type="radio" name="choice" value="paper" required>
            Paper
        </label>
        <label>
            <input type="radio" name="choice" value="scissors" required>
            Scissors
        </label>
        <!-- <button type="submit">Play</button> -->
    </form>

    @if (isset($result))
        <div>
            <h2>{{ $result }}</h2>
            <p>Your choice: {{ $userChoice }}</p>
            <p>Computer's choice: {{ $computerChoice }}</p>
            <a href="{{ url('/') }}">Play Again</a>
        </div>
    @endif
    <div>
        <div><h1>User score: </h1> <h1>1</h1></div>
        <div><h1>Computer score: </h1> <h1>1</h1></div>
    </div>
    <button type="submit">Want to Save Score</button>
</body>
</html>
