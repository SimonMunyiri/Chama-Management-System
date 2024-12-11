# Chama Management System

## Overview

The **Chama Management System** is a web-based application designed to streamline the management of savings and investment groups (commonly referred to as "Chamas"). This system allows users to track contributions, loans, and overall group activities, making it easier for members to collaborate, monitor group finances, and make informed decisions. Built with **PHP** and **MySQL**, the system offers an intuitive interface and robust backend functionality for managing group operations.

---

## Features

- **User Authentication**: Secure login and registration for members and administrators.
- **Member Management**: Add, edit, and remove group members.
- **Contribution Tracking**: Track individual member contributions towards savings.
- **Loan Management**: Record and manage loans taken by members, including repayment schedules.
- **Financial Reports**: Generate detailed reports on group finances (contributions, loans, balances, etc.).
- **Admin Panel**: Allows administrators to manage members, loans, and financial records.
- **User Roles**: Different access levels for members, admins, and managers.
- **Notifications**: Email notifications for loan approvals, upcoming payments, and group updates.

---

## Technologies Used

- **Frontend**: 
  - HTML5, CSS3, Bootstrap (for responsive design)
  - JavaScript (for frontend interactivity)
- **Backend**: 
  - PHP (for server-side logic)
  - MySQL (for database management)
- **Database**:
  - MySQL for storing member data, transactions, loans, and group records.
  
---

## Installation

### Prerequisites

- PHP 7.0 or higher
- MySQL 5.6 or higher
- Apache or any other compatible web server
- Composer (optional for managing PHP dependencies)

### Steps

1. **Clone the Repository**

   ```bash
   git clone https://github.com/SimonMunyiri/chama-management-system.git
   cd chama-management-system
   ```

2. **Set Up the Database**

   - Create a new database in MySQL:

     ```sql
     CREATE DATABASE chamams;
     ```

   - Import the SQL schema to set up the necessary tables.

     ```bash
     mysql -u username -p chama_management < database/chamams.sql
     ```


4. **Start the Server**

   - If you're using Apache, place the project folder inside your `htdocs` directory (for XAMPP, MAMP, etc.).
   - Alternatively, you can use PHP's built-in server:

     ```bash
     php -S localhost:8000
     ```

6. **Access the Application**

   Open your web browser and navigate to:

   ```
   http://localhost/chama-management-system
   ```

---

## Usage

1. **Create an Account**: New members can register by providing their personal information.
2. **Login**: Registered members can log in using their credentials.
3. **Manage Contributions**: Members can view and update their contribution records.
4. **Apply for Loans**: Members can apply for loans, and admins can approve or reject them.
5. **Generate Reports**: Administrators can generate financial reports to view group progress.

---

## Contributing

We welcome contributions to improve the Chama Management System! Here’s how you can help:

1. **Fork the repository**.
2. **Create a new branch** for your feature or bugfix.
3. **Make your changes** and commit them with clear messages.
4. **Push to your forked repository**.
5. **Create a pull request** detailing the changes you made.



## Contact

For any questions or feedback, feel free to open an issue or reach out directly via [munyirisimon6@gmail.com](mailto:munyirisimon6@gmail.com).

---

## Acknowledgments

- PHP, MySQL, and Bootstrap for their amazing tools that made this project possible.


---

This `README` provides the essential information for setting up and contributing to the **Chama Management System**. If you encounter any issues or need assistance, don't hesitate to contact us!
