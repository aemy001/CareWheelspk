# CareWheels Transportation System

CareWheels is a web-based transportation management system designed to facilitate interactions between admins, drivers, and customers. The system is built using HTML, CSS, JavaScript, Bootstrap, PHP, and MySQL.

## Database and Login Credentials

**Database Name**: `tsdp2`

### Credentials:
1. **Admin Login**:
   - Email: `ali@gmail.com`
   - Password: `alii123`

2. **Driver Login**:
   - Email: `jawed567@gmail.com`
   - Password: `1234567`

3. **Customer Login**:
   - Email: `jawedsalman53@gmail.com`
   - Password: `1234567`

Additional credentials can be found in the database.

---

## Setup Instructions

To set up the CareWheels system, follow these steps:

### 1. Database Setup
1. Import the `tsdp2` database into your MySQL server.
2. Update database connection details in the PHP files, such as the database name, username, and password.

### 2. Enabling Email Functionality
To enable email functionality on XAMPP, follow these steps:

#### Step 1: Configure `php.ini`
1. Navigate to `C:\xampp\php` and open the `php.ini` file.
2. Locate `[mail function]` by pressing `Ctrl + F`.
3. Set the following values:
   ```ini
   SMTP=smtp.gmail.com
   smtp_port=587
   sendmail_from=YourGmailId@gmail.com
   sendmail_path="\"C:\xampp\sendmail\sendmail.exe\" -t"
