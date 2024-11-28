<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Profile</title>
    <link rel="stylesheet" href="styles.css">
<style>
/* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Eurostile', 'Microgramma', 'Bank Gothic', sans-serif;
}

/* Container styling */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f5f5dc; /* Beige background */   
}

/* Profile Card */
.profile {
    background-color: #5a0000; /* Maroon background */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    padding: 100px; /* Adjusted padding */
    max-width: 650px;
    text-align: center;
    color: #f5f5dc; /* Beige text color */
}

.profile-photo {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 20px;
    border: 3px solid #f5f5dc; /* Beige border */
}

h1 {
    font-size: 24px;
    color: #f5f5dc;
    margin-bottom: 10px;
}

p {
    font-size: 16px;
    margin-bottom: 10px;
}

ul {
    list-style-type: none;
    padding-left: 0;
}

ul li {
    font-size: 14px;
    margin-bottom: 5px;
}

/* Button Styling */
button {
    background-color: #800000; /* Maroon color */
    color: #f5f5dc; /* Beige text color */
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    text-decoration: none;
    display: inline-block;
}

button:hover {
    background-color: #a00000; /* Slightly lighter maroon on hover */
}

/* Responsive Design */
@media (max-width: 768px) {
    .profile {
        max-width: 300px;
        padding: 30px; /* Reduced padding for smaller screens */
    }

    .profile-photo {
        width: 120px;
        height: 120px;
    }

    h1 {
        font-size: 20px;
    }

    p, ul li {
        font-size: 14px;
    }
}

</style>

</head>

<body>
<div class="container">
        <div class="profile">
            <img src="{{ $img }}" alt="Profile Photo" class="profile-photo">
            <h1>{{ $name }}</h1>
            <p><strong>Birthdate:</strong> {{ $bdate }}</p>
            <p><strong>Birthplace:</strong> {{ $bplace }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Hobbies:</strong> {{ $hobby }}</p>

            <!-- Button for Educational Background -->
            <a href="{{ url('/page2') }}">
                <button>Educational Background</button>
            </a>
        </div>
    </div>
</body>
</html>
