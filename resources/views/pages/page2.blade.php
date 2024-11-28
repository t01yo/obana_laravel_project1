<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Background</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5dc; /* Beige */
            margin: 0;
            padding: 0;
        }

        .container {
            width: 30%;
            margin: 70px auto;
            background-color: #5a0000; /* Maroon */
            padding: 80px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            color: #f5f5dc; /* Beige text color */
        }

        h2 {
            text-align: center;
            color: #f5f5dc; /* Beige */
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #f5f5dc; /* Beige */
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #800000; /* Darker maroon */
            color: #f5f5dc; /* Beige */
        }

        td {
            background-color: #5a0000; /* Maroon */
            color: #f5f5dc; /* Beige text color */
        }

        /* Button Styling */
        .button-container {
            display: flex;
            justify-content: center; /* Center the button */
            margin-top: 20px; /* Add some space above the button */
        }

        button {
            background-color: #800000; /* Maroon color */
            color: #f5f5dc; /* Beige text color */
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        button:hover {
            background-color: #a00000; /* Slightly lighter maroon on hover */
        }

        @media (max-width: 768px) {
            .container {
                width: 90%;
            }

            th, td {
                font-size: 1em;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="section">
            <h2>Educational Background</h2>
            <table>
                @foreach ($educationalBackground as $level => $school)
                    <tr>
                        <td>{{ $level }} <br><br>
                            {{ $school }}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

        <div class="button-container">
            <a href="{{ url('/page1') }}">
                <button>Personal Information</button>
            </a>
        </div>

    </div>

</body>

</html>
