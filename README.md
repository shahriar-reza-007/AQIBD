# Air Quality Monitoring Dashboard

## Project Overview

The Air Quality Monitoring Dashboard is a comprehensive web application that provides real-time air quality data for major cities in Bangladesh. It enables users to register, log in, select cities of interest, and view detailed air quality information with personalized settings.

## Features

### User Authentication
- **Registration**: Complete user registration with comprehensive form validation
- **Secure Login**: Password hashing and secure authentication system
- **Remember Me**: Persistent login functionality using cookies
- **Session Management**: Robust session handling for user state
- **Logout**: Secure logout with session cleanup

### Dashboard Features
- **Real-time AQI Display**: Live Air Quality Index data for major Bangladeshi cities
- **Color-coded Indicators**: Visual AQI status representation (Good, Moderate, Unhealthy, etc.)
- **City Selection Interface**: Interactive selection of up to 10 cities for monitoring
- **Personalized Dashboard**: Customized view showing only selected cities
- **User Profile Management**: Comprehensive user profile editing capabilities

### Technical Features
- **Responsive Design**: Optimized for desktop, tablet, and mobile devices
- **Form Validation**: Both client-side (JavaScript) and server-side (PHP) validation
- **Database Integration**: MySQL database for data persistence
- **Session & Cookie Management**: Secure user state management
- **Password Security**: Industry-standard password hashing
- **UI Customization**: Color picker for personalized user interface

## File Structure

```
air-quality-dashboard/
├── confirm.php          # Registration confirmation page
├── index.php           # Main landing page with login/registration forms
├── logout.php          # Logout handler and session cleanup
├── process.php         # Registration form processor and validation
├── request.php         # City selection interface and management
├── show.php            # Main dashboard displaying selected cities
├── script.js           # Client-side validation and interactive functionality
└── style.css           # Main stylesheet and responsive design
```

## Database Requirements

The application requires two MySQL databases with the following schema:

### 1. Users Database (`users`)
```sql
CREATE DATABASE users;
USE users;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    location VARCHAR(100),
    zip_code VARCHAR(10),
    preferred_city VARCHAR(50),
    terms_accepted BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

### 2. City Information Database (`info`)
```sql
CREATE DATABASE info;
USE info;

CREATE TABLE cities (
    City VARCHAR(100) PRIMARY KEY,
    Country VARCHAR(100) NOT NULL,
    AQI INT NOT NULL,
    last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Sample data for Bangladeshi cities
INSERT INTO cities (City, Country, AQI) VALUES
('Dhaka', 'Bangladesh', 156),
('Chittagong', 'Bangladesh', 89),
('Sylhet', 'Bangladesh', 67),
('Rajshahi', 'Bangladesh', 78),
('Khulna', 'Bangladesh', 92);
```

## Installation

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache/Nginx web server
- Modern web browser with JavaScript support

### Step-by-Step Installation

1. **Clone the Repository**
   ```bash
   git clone [repository-url]
   cd air-quality-dashboard
   ```

2. **Database Setup**
   - Create the MySQL databases using the schema provided above
   - Update database credentials in the following files:
     - `index.php`
     - `process.php`
     - `request.php`
     - `show.php`

3. **Web Server Configuration**
   - Deploy files to your web server's document root
   - Ensure PHP extensions are enabled: `mysqli`, `session`
   - Configure appropriate file permissions

4. **Environment Configuration**
   - Update database connection parameters in each PHP file
   - Verify Font Awesome CDN accessibility
   - Test database connectivity

## Usage Guide

### Getting Started
1. **Registration**: Create a new account with valid credentials
2. **Login**: Access your account using email and password
3. **City Selection**: Choose up to 10 cities from the available list
4. **Dashboard**: View real-time air quality data for selected cities
5. **Customization**: Use the color picker to personalize your dashboard

### AQI Color Coding
- **Green (0-50)**: Good air quality
- **Yellow (51-100)**: Moderate air quality
- **Orange (101-150)**: Unhealthy for sensitive groups
- **Red (151-200)**: Unhealthy
- **Purple (201-300)**: Very unhealthy
- **Maroon (301+)**: Hazardous

## Technical Dependencies

### Server-side
- **PHP**: 7.4+ with mysqli extension
- **MySQL**: 5.7+ for database operations

### Client-side
- **Font Awesome**: Icon library (loaded via CDN)
- **JavaScript**: ES6+ compatible browser
- **CSS3**: Modern browser support for responsive design

## API Integration

The application is designed to integrate with air quality APIs. Current implementation uses static data, but can be extended to fetch real-time data from services like:
- OpenWeatherMap Air Pollution API
- AirVisual API
- Government environmental monitoring APIs

## Security Features

- **Password Hashing**: Secure password storage using PHP's `password_hash()`
- **SQL Injection Prevention**: Prepared statements for database queries
- **Session Security**: Secure session management and timeout
- **Input Validation**: Comprehensive client and server-side validation
- **XSS Protection**: Output sanitization and validation

## Team Members

- **Raihanul Islam** - ID: 22-46680-1
- **Shahriar Reza** - ID: 22-46673-1

## Contributing

This project is part of an academic assignment. For contributions or suggestions:

1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## License

This project is developed for educational purposes. All rights reserved by the team members. Unauthorized distribution or commercial use is prohibited.

## Troubleshooting

### Common Issues

**Database Connection Error**
- Verify MySQL service is running
- Check database credentials in PHP files
- Ensure databases and tables are created

**Session Issues**
- Check PHP session configuration
- Verify write permissions for session directory
- Clear browser cookies if needed

**Styling Issues**
- Verify Font Awesome CDN is accessible
- Check CSS file path and permissions
- Ensure modern browser compatibility

## Future Enhancements

- Real-time API integration for live air quality data
- Email notifications for poor air quality
- Historical data visualization with charts
- Mobile application development
- Multi-language support
- Advanced filtering and search capabilities

---

For technical support or questions, please contact the project team members listed above.
