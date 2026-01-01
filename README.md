# Passport Automation System

-----

### Project Overview

The Passport Automation System is a web-based application developed to automate and simplify the passport application process. It enables users to register, log in, apply for a passport, schedule appointments, track application status, and raise support requests through an online platform.

-----

### Key Features

- User Registration and Login
- Passport Application Submission
- Appointment Scheduling
- Passport Status Tracking
- Support / Help Request System
- Simple and Responsive User Interface

-----

### Technology Stack

- Frontend: HTML, CSS
- Backend: PHP
- Database: MySQL
- Server: Apache (XAMPP)
- Version Control: Git & GitHub

-----

### Project Structure

passport-automation-system  
index.php – Entry point  
config.php – Database configuration  

assets  
- styles.css  
- images  

auth  
- login.php  
- register.php  

user  
- user_dashboard.php  
- passport_application.php  
- passport_status.php  
- appointment_schedule.php  
- support.php  

-----

### Database Design

Users Table  
- id  
- full_name  
- email  
- password  
- created_at  

Passport Applications Table  
- application_id  
- user_id  
- application_type  
- status  
- applied_date  

Appointments Table  
- appointment_id  
- user_id  
- appointment_date  

Support Requests Table  
- request_id  
- user_id 
- message 
- created_at 

-----

### Application Flow

- User registers and logs in
- User accesses dashboard
- User applies for passport
- User schedules appointment
- User tracks passport status
- User raises support requests if required

-----

### How to Run the Project

1. Install XAMPP
2. Start Apache and MySQL
3. Copy the project folder into the htdocs directory
4. Create a MySQL database named `passport_system`
5. Update database credentials in `config.php`
6. Open browser and visit 
   http://localhost/passport-automation-system

-----

### Future Enhancements

- Admin dashboard
- Document upload feature
- Email notifications
- Improved authentication security

-----
