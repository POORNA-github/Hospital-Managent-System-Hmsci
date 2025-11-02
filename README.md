🌟 Features

The Hospital Management System provides the following key functionalities:

  Patient Management: Register new patients, view, and update patient records.

  Appointment Scheduling: Book, manage, and view appointments for doctors and departments.

  User Roles: Separate access and dashboards for Administrators, Doctors, and other staff.

  Billing/Invoicing: Generate and manage patient bills for services and treatments.

  Department/Staff Management: Manage hospital departments and staff information.

  Secure Authentication: User login and session management based on CodeIgniter's structure.

🚀 Getting Started

Follow these steps to get the development environment running on your local machine.

Prerequisites
You must have XAMPP installed, which includes the Apache server, PHP, and MySQL database.

XAMPP: (Ensure the PHP version is compatible with your CodeIgniter version).

Installation
Clone the Repository

Setup CodeIgniter in XAMPP

Locate the XAMPP installation directory (usually C:\xampp on Windows).

Move the cloned project folder (Hospital-Managent-System-Hmsci) into the htdocs folder (C:\xampp\htdocs).

Database Setup

Start the Apache and MySQL services from the XAMPP Control Panel.

Open your web browser and navigate to http://localhost/phpmyadmin/.

Create a new database (e.g., hmsci_db).

Import the database structure and initial data from the .sql file, which is typically located in a directory like /application/sql/hmsci_db.sql (Adjust the path if necessary).

Configure CodeIgniter

Open the database configuration file: application/config/database.php.

Update the database connection settings to match your XAMPP setup:

Set Base URL

Open the main configuration file: application/config/config.php.

Update the $config['base_url'] to your project's URL:
