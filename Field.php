<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Field and Playground Types</title>
    <style>
        /* General styles */
    @keyframes moveBackground {
    0% { background-position: 0 0; }
    100% { background-position: 100% 0; }
}

body {
    font-family: Arial, sans-serif;
    background-color: #1c3a5a; /* Deep navy blue inspired by evening stadium lighting */
    background-image: 
        linear-gradient(rgba(28, 58, 90, 0.9), rgba(20, 40, 60, 0.9)), /* Dark blue gradient overlay for readability */
        url('images/stadium_texture.jpg'); /* Replace with the path to a subtle stadium or track texture */
    background-size: cover;
    background-attachment: fixed;
    color: #f4f4f4; /* Light color for good contrast with the dark background */
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 20px;
    margin: 0;
    min-height: 100vh;
    text-align: center;

    /* Add these lines for the moving background effect */
    animation: moveBackground 10s linear infinite;
}



        
        h1 {
            color: #005580;
            margin-bottom: 20px;
            font-size: 2em;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Card container for each field type */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1200px;
            gap: 20px;
        }

        /* Card styles */
        .card {
            background-color: #f5f5f5;
            border: 1px solid #005580;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            width: 280px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.25);
        }

        /* Field title */
        .card h2 {
            background-color: #ff4d4d;
            color: white;
            padding: 15px;
            margin: 0;
            font-size: 1.25em;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        /* Image styling */
        .field-image {
            width: 100%;
            height: 180px;
            border-top: 1px solid #005580;
            object-fit: cover;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        /* Responsive layout */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .card {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <h1>Field and Playground Types</h1>

    <div class="container">
        <?php
            // Array of fields with image paths
            $fields = [
                "Basketball Pitch" => "images/basketball_pitch.jpg",
                "Hockey Field" => "images/hockey_field.jpg",
                "Handball Field" => "images/handball_field.jpg",
                "Rugby Field" => "images/rugby_field.jpg",
                "Volleyball Field" => "images/volleyball_field.jpg",
                "Archery Field" => "images/archery_field.jpg"
            ];

            // Display each field as a card with the associated image
            foreach ($fields as $field => $imagePath) {
                echo '
                    <div class="card">
                        <h2>' . $field . '</h2>
                        <img src="' . $imagePath . '" alt="' . $field . '" class="field-image">
                    </div>
                ';
            }
        ?>
    </div>

</body>
</html>
