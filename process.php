<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Modern styling for confirmation page */
        :root {
            --primary-color: #3498db;
            --primary-dark: #2980b9;
            --accent-color: #2ecc71;
            --accent-dark: #27ae60;
            --text-dark: #2c3e50;
            --text-light: #ecf0f1;
            --card-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: var(--text-dark);
            line-height: 1.6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #f5f7fa, #e4e7ec);
        }

        .container {
            background-color: white;
            padding: 3rem;
            border-radius: 15px;
            max-width: 700px;
            width: 90%;
            box-shadow: var(--card-shadow);
            position: relative;
            overflow: hidden;
        }

        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary-color), var(--accent-color));
        }

        .success-icon {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
        }

        .success-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: var(--accent-color);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 2.5rem;
            box-shadow: 0 5px 15px rgba(46, 204, 113, 0.3);
        }

        h2 {
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2rem;
            position: relative;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, var(--primary-color), var(--accent-color));
            border-radius: 3px;
        }

        .info-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 2rem;
            margin: 2rem 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        h3 {
            color: var(--primary-dark);
            margin-bottom: 1.5rem;
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 0.75rem;
        }

        .info-row {
            display: flex;
            margin-bottom: 0.75rem;
            align-items: center;
            padding: 0.5rem 0;
            border-bottom: 1px dashed rgba(0, 0, 0, 0.05);
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .label {
            flex: 1;
            font-weight: 600;
            color: var(--text-dark);
            display: flex;
            align-items: center;
        }

        .label i {
            margin-right: 10px;
            color: var(--primary-color);
            width: 20px;
            text-align: center;
        }

        .value {
            flex: 2;
            color: #555;
        }

        .back-button {
            display: block;
            text-align: center;
            margin-top: 2rem;
            background: linear-gradient(to right, var(--primary-color), var(--primary-dark));
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .back-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .terms-agreed {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .terms-agreed.yes {
            background-color: rgba(46, 204, 113, 0.15);
            color: var(--accent-dark);
        }

        .terms-agreed.no {
            background-color: rgba(231, 76, 60, 0.15);
            color: #c0392b;
        }

        @media (max-width: 768px) {
            .container {
                padding: 2rem;
                width: 95%;
            }
            
            .info-row {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .label {
                margin-bottom: 0.5rem;
            }
            
            .value {
                padding-left: 25px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-icon">
            <div class="success-circle">
                <i class="fas fa-check"></i>
            </div>
        </div>
        
        <h2>Registration Successful!</h2>
        
        <p class="text-center" style="text-align: center;">Thank you for registering with our Air Quality Monitoring service. Your account has been created successfully.</p>
        
        <div class="info-card">
            <h3><i class="fas fa-user-check"></i> Your Information</h3>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $fname = htmlspecialchars($_POST["fname"]);
                $email = htmlspecialchars($_POST["email"]);
                $location = htmlspecialchars($_POST["location"]);
                $zip = htmlspecialchars($_POST["zip"]);
                $city = htmlspecialchars($_POST["city"]);
                $terms = isset($_POST["terms"]) ? "Agreed" : "Not Agreed";

                echo "<div class='info-row'>";
                echo "<div class='label'><i class='fas fa-user'></i> Full Name</div>";
                echo "<div class='value'>$fname</div>";
                echo "</div>";

                echo "<div class='info-row'>";
                echo "<div class='label'><i class='fas fa-envelope'></i> Email</div>";
                echo "<div class='value'>$email</div>";
                echo "</div>";

                echo "<div class='info-row'>";
                echo "<div class='label'><i class='fas fa-map-marker-alt'></i> Location</div>";
                echo "<div class='value'>$location</div>";
                echo "</div>";

                echo "<div class='info-row'>";
                echo "<div class='label'><i class='fas fa-map-pin'></i> Zip Code</div>";
                echo "<div class='value'>$zip</div>";
                echo "</div>";

                echo "<div class='info-row'>";
                echo "<div class='label'><i class='fas fa-city'></i> Preferred City</div>";
                echo "<div class='value'>$city</div>";
                echo "</div>";

                echo "<div class='info-row'>";
                echo "<div class='label'><i class='fas fa-check-circle'></i> Terms & Conditions</div>";
                
                if ($terms == "Agreed") {
                    echo "<div class='value'><span class='terms-agreed yes'><i class='fas fa-check'></i> Agreed</span></div>";
                } else {
                    echo "<div class='value'><span class='terms-agreed no'><i class='fas fa-times'></i> Not Agreed</span></div>";
                }
                
                echo "</div>";

            } else {
                echo "<p>No data received. Please fill out the registration form.</p>";
            }
            ?>
        </div>
        
        <div style="text-align: center; margin-top: 2rem;">
            <p>You will receive air quality alerts for your preferred city.</p>
            <p>Monitor air quality conditions and get health recommendations tailored to your location.</p>
        </div>
        
        <a href="index.php" class="back-button"><i class="fas fa-arrow-left"></i> Back to Home</a>
    </div>
</body>
</html>