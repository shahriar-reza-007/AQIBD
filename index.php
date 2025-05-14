<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Quality Monitoring Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="main-container">
        <header>
            <img src="images.png" alt="Air Quality Banner" class="top-banner">
            <h1><i class="fas fa-wind"></i> Air Quality Monitoring Dashboard</h1>
            <p>Real-time air quality data for major cities in Bangladesh</p>
        </header>

        <div class="container">
            <div class="left-panel">
                <div class="box box-1">
                    <h3><i class="fas fa-chart-bar"></i> Air Quality Index Data</h3>
                    <p>Current AQI measurements for major cities:</p>
                    <table>
                        <tr>
                            <th>City</th>
                            <th>Air Quality Index</th>
                        </tr>
                        <tr>
                            <td>Dhaka</td>
                            <td>150</td>
                        </tr>
                        <tr>
                            <td>Chattogram</td>
                            <td>120</td>
                        </tr>
                        <tr>
                            <td>Rajshahi</td>
                            <td>130</td>
                        </tr>
                        <tr>
                            <td>Khulna</td>
                            <td>140</td>
                        </tr>
                        <tr>
                            <td>Sylhet</td>
                            <td>110</td>
                        </tr>
                        <tr>
                            <td>Barishal</td>
                            <td>160</td>
                        </tr>
                        <tr>
                            <td>Rangpur</td>
                            <td>170</td>
                        </tr>
                        <tr>
                            <td>Mymenshing</td>
                            <td>180</td>        
                        </tr>
                        <tr>
                            <td>Gazipur</td>
                            <td>190</td>
                        </tr>
                        <tr>
                            <td>Cox's Bazar</td>
                            <td>200</td>    
                        </tr>
                    </table>
                </div>
                <div class="box box-2">
                    <div>
                        <i class="fas fa-info-circle fa-2x"></i>
                        <h3>AQI Scale</h3>
                        <p>0-50: Good | 51-100: Moderate<br>
                        101-150: Unhealthy for Sensitive Groups<br>
                        151-200: Unhealthy | 201-300: Very Unhealthy<br>
                        301+: Hazardous</p>
                    </div>
                </div>
            </div>

            <div class="right-section">
                <div class="form-container">
                    <h2><i class="fas fa-user-plus"></i> Create Account</h2>
                    <form action="process.php" method="POST" onsubmit="return validateForm()">
                        <div class="form-group">
                            <label for="fname"><i class="fas fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="fname" placeholder="Enter your full name">
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i> Email</label>
                            <input type="email" id="email" name="email" placeholder="xx-xxxxx-x@student.aiub.edu">
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="fas fa-lock"></i> Password</label>
                            <input type="password" id="password" name="password" placeholder="8 digits only">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password"><i class="fas fa-check-circle"></i> Confirm Password</label>
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password">
                        </div>
                        <div class="form-group">
                            <label for="location"><i class="fas fa-map-marker-alt"></i> Location</label>
                            <input type="text" id="location" name="location" placeholder="Your current location">
                        </div>
                        <div class="form-group">
                            <label for="zip"><i class="fas fa-map-pin"></i> Zip Code</label>
                            <input type="text" id="zip" name="zip" placeholder="4-digit zip code">
                        </div>
                        <div class="form-group">
                            <label for="city"><i class="fas fa-city"></i> Preferred City</label>
                            <select id="city" name="city">
                                <option value="">Select City</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Barishal">Barishal</option>
                                <option value="Comilla">Comilla</option>
                            </select>
                        </div>
                        <div class="checkbox-container">
                            <input type="checkbox" id="terms" name="terms">
                            <label for="terms">I agree to the <a href="#">terms and conditions</a></label>
                        </div>
                        <button type="submit"><i class="fas fa-paper-plane"></i> Submit</button>
                    </form>
                </div>
                <!-- Login Box -->
                <div class="form-container login-container">
                    <h2><i class="fas fa-sign-in-alt"></i> Log In</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="form-group">
                            <label for="login_email"><i class="fas fa-envelope"></i> Email</label>
                            <input type="email" id="login_email" name="login_email" placeholder="Enter your email" value="<?php echo $rememberedEmail; ?>">
                        </div>
                        <div class="form-group">
                            <label for="login_password"><i class="fas fa-lock"></i> Password</label>
                            <input type="password" id="login_password" name="login_password" placeholder="Enter your password">
                        </div>
                        <div class="checkbox-container">
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">Remember me</label>
                        </div>
                        <button type="submit" name="login"><i class="fas fa-sign-in-alt"></i> Log In</button>
                    </form>
                    <div class="form-footer">
                        <p>Don't have an account? <a href="#" id="show-register">Register Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>