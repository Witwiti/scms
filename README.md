# Student Clearance Management System

A PHP-based student clearance management portal for managing student requests, office approvals, and administrative oversight in a school environment.

## Overview

This system is designed for:

- Admins to manage users, offices, announcements, and system settings
- Students to monitor their clearance progress
- Office personnel to review and process clearance requirements

The application is built with PHP and MySQL and is intended to run locally using XAMPP.

## Tech Stack

- PHP
- MySQL / MariaDB
- MySQLi
- HTML / CSS
- JavaScript
- Lucide Icons

## Features

- Role-based login for admin, student, and office users
- Admin dashboard with key system statistics
- Student and office management
- Assignatory management
- Clearance tracking and status monitoring
- Announcements management
- User profile support
- Session protection and maintenance mode support
- Responsive dashboard and authentication pages

## Project Structure

```text
scms/
├── admin/                 # Admin portal pages
├── assets/                # CSS, JS, images, uploads
├── config/                # Database and app config
├── office/                # Office user portal pages
├── student/               # Student portal pages
├── index.php              # Landing page and portal redirect
├── README.md              # Project documentation
├── README.txt             # Original brief/project notes
└── ...
```

## Requirements

- XAMPP or equivalent local PHP + MySQL environment
- Apache and MySQL enabled
- Modern browser

## Local Setup

1. Place the project folder inside your XAMPP `htdocs` directory.
2. Start Apache and MySQL from XAMPP.
3. Open phpMyAdmin and create a database named `clearance_db`.
4. Update the database credentials in `config/db.php` if needed.
5. Import the SQL schema file if one is available in your project or database folder.
6. Open the admin setup page:

```text
http://localhost/scms/admin/create_admin.php
```

7. Sign in with the default admin account:

```text
Username: admin
Password: admin123
```

8. After creating the admin account, remove or secure `admin/create_admin.php`.
9. Log in to the system here:

```text
http://localhost/scms/admin/login.php
```

## Default Access

- Admin: `admin` / `admin123`
- Student and office accounts are created and managed through the application by the admin

## Notes

- The database connection is configured in `config/db.php`.
- The application includes automatic database migration checks for some tables and columns.
- A maintenance mode feature is available through the system settings table.

## Recommended Workflow

1. Create the admin account
2. Create student and office accounts
3. Configure offices and assignatories
4. Manage announcements and settings
5. Process clearance requests from the dashboard

## Security Reminder

- Do not leave the admin creation page accessible in production.
- Change default credentials immediately after the first setup.
- Keep your local database credentials private.

## License

This project is intended for local academic or internal project use unless another license is explicitly provided.
