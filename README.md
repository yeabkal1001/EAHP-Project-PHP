# Emergency Ambulance Hiring Portal (EAHP)

A comprehensive web-based emergency ambulance booking and management system designed to provide fast and efficient ambulance services during medical emergencies.

## 🚨 About The Project

The Emergency Ambulance Hiring Portal is a user-friendly web application that bridges the gap between emergency medical needs and ambulance service providers. This system allows users to quickly book ambulances online while providing administrators with tools to manage bookings, track ambulances, and maintain service records.

### Key Features

- **Quick Ambulance Booking**: Fast online booking system with immediate confirmation
- **Multiple Ambulance Types**: Support for different types of ambulances (BLS, ALS, Non-Emergency, Boat)
- **Real-time Status Tracking**: Track ambulance status from booking to completion
- **Admin Dashboard**: Comprehensive management system for administrators
- **Booking Management**: View, assign, update, and manage all ambulance requests
- **Reporting System**: Generate detailed reports for bookings and services
- **Responsive Design**: Works seamlessly on desktop and mobile devices

## 🛠️ Built With

- **Frontend**: HTML5, CSS3, Bootstrap 5, JavaScript
- **Backend**: PHP 8.x
- **Database**: MySQL/MariaDB
- **Additional Libraries**: 
  - Font Awesome (Icons)
  - AOS (Animations)
  - Bootstrap Icons
  - Swiper (Sliders)

## 📋 Prerequisites

Before you begin, ensure you have the following installed:

- **PHP** (version 8.0 or higher)
- **MySQL/MariaDB** (version 5.7 or higher)
- **Apache/Nginx** web server
- **phpMyAdmin** (recommended for database management)

## 🚀 Installation & Setup

### 1. Clone the Repository
```bash
git clone https://github.com/yeabkal1001/EAHP-Project-PHP.git
cd EAHP-Project-PHP
```

### 2. Database Setup
1. Start your MySQL server
2. Open phpMyAdmin or your preferred MySQL client
3. Create a new database named `eahpdb`
4. Import the SQL file:
   ```sql
   mysql -u root -p eahpdb < "SQL File/eahpdb.sql"
   ```

### 3. Configuration
1. Navigate to `eahp/includes/dbconnection.php`
2. Update database credentials if needed:
   ```php
   $con = mysqli_connect("localhost", "your_username", "your_password", "eahpdb");
   ```

### 4. Web Server Setup
1. Copy the `eahp` folder to your web server directory (htdocs for XAMPP)
2. Start your web server (Apache)
3. Access the application at `http://localhost/eahp/`

## 💻 Usage

### For Users
1. **Book an Ambulance**: 
   - Visit the homepage
   - Fill out the "Hire an Ambulance" form
   - Receive booking confirmation with tracking number

2. **Track Your Booking**:
   - Use the ambulance tracking feature
   - Enter your booking number to see current status

### For Administrators
1. **Access Admin Panel**: Visit `http://localhost/eahp/admin/`
2. **Default Login Credentials**:
   - Username: `admin`
   - Password: `admin`
3. **Admin Functions**:
   - Manage ambulance fleet
   - Process booking requests
   - Generate reports
   - Update system settings

## 📊 Database Structure

The system uses the following main tables:
- `tbladmin` - Administrator accounts
- `tblambulance` - Ambulance fleet information
- `tblambulancehiring` - Booking records
- `tblpage` - CMS content (About Us, Contact)
- `tbltrackinghistory` - Status tracking history

## 🔧 System Requirements

- **Server**: Apache 2.4+ or Nginx
- **PHP**: 8.0+ with MySQLi extension
- **Database**: MySQL 5.7+ or MariaDB 10.2+
- **Browser**: Modern browsers (Chrome, Firefox, Safari, Edge)

## 📱 Ambulance Types Supported

1. **Basic Life Support (BLS)** - Basic medical care during transport
2. **Advanced Life Support (ALS)** - Advanced medical equipment and trained paramedics
3. **Non-Emergency Patient Transport** - Scheduled medical appointments
4. **Boat Ambulance** - Water-based emergency transport

## 🛡️ Security Features

- Password hashing using MD5 (recommended to upgrade to bcrypt)
- Session management for admin authentication
- Input validation and sanitization
- SQL injection prevention measures

## 🤝 Contributing

Contributions are welcome! Here's how you can help:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is open source and available under the [MIT License](LICENSE).

## 👤 Author

**Yeabsira Kayel**
- GitHub: [@yeabkal1001](https://github.com/yeabkal1001)
- Email: yeabsira.kayel@bitscollege.edu.et

## 🙏 Acknowledgments

- Bootstrap team for the responsive framework
- Font Awesome for the iconography
- All contributors and users of this system

## 📞 Support

If you encounter any issues or have questions:
1. Check the [Issues](https://github.com/yeabkal1001/EAHP-Project-PHP/issues) page
2. Create a new issue if your problem isn't already reported
3. Contact: yeabsira.kayel@bitscollege.edu.et

---

**⚡ Remember: In real emergencies, always call your local emergency services (911, 112, etc.) first!**