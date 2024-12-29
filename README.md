# student-details-management-CRUD-Operations-.

A simple web-based application to perform CRUD (Create, Read, Update, Delete) operations for managing student details. This project is built using **HTML**, **CSS**, **PHP**, and **MySQL**.

---

## Features

- Add new student details (Name, Age, Class).
- View all existing student records in a table.
- Delete a student record.
- Responsive and user-friendly interface.

---

## Prerequisites

- XAMPP/WAMP/MAMP/LAMP installed (for Apache and MySQL server).
- Basic knowledge of PHP and MySQL.
- A browser to access the application.

---

## Installation Steps

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your-username/student-management.git
   cd student-management
   ```

2. **Set Up the Database**:
   - Open **phpMyAdmin** or use the MySQL CLI.
   - Create a new database:
     ```sql
     CREATE DATABASE student_db;
     ```
   - Create the `students` table:
     ```sql
     CREATE TABLE students (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(100) NOT NULL,
         age INT NOT NULL,
         class VARCHAR(50) NOT NULL
     );
     ```

3. **Configure the PHP Files**:
   - Place the project files in your web server's directory:
     - Example for XAMPP: `C:/xampp/htdocs/student-management/`
   - Verify the database connection in `db_config.php`:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = ""; // Default is empty for XAMPP
     $dbname = "student_db";
     ```

4. **Start the Server**:
   - Open the XAMPP/WAMP Control Panel.
   - Start **Apache** and **MySQL** services.

5. **Access the Application**:
   - Open a browser and navigate to:
     ```
     http://localhost/student-management/index8.html
     ```

---

## Usage

1. **Add Students**:
   - Fill in the form with student details (Name, Age, Class) and click "Add Student."

2. **View Students**:
   - Scroll down to see a table displaying all existing student records.

3. **Delete Students**:
   - Click the "Delete" button next to the record you wish to remove.

---

## File Structure

```
student-management/
├── index8.html          # Frontend interface (HTML + CSS)
├── db_config.php        # Database configuration and CRUD logic
├── README.md            # Project documentation
```

---

## Technologies Used

- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL

---

## Contributing

Contributions are welcome! Please fork this repository and submit a pull request with your changes.

---

## License

This project is licensed under the MIT License. See the LICENSE file for details.

---

## Author

- **Your Name** - Vikram7912

