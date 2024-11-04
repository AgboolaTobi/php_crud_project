# PHP CRUD and Multi-Page Registration Site

This project includes a PHP-based CRUD (Create, Read, Update, Delete) application and a multi-page registration website with a form, image carousel, and profile/about page.

## Project Structure

- **php_crud**: Contains PHP files for CRUD operations with MySQL.
  - `crud.php`: Main file with CRUD functions for managing user records.
  - `test_crud.php`: Script to test CRUD functions.
- **registration_site**: Contains HTML and CSS for the registration website.
  - `index.html`: Registration form page with fields for name, email, password, and file upload.
  - `carousel.html`: Page with an image or text carousel.
  - `profile.html`: Profile or "About Us" page.
  - `style.css`: Styles for all HTML pages.

## How to Run

1. **Set Up the Database**:
   - Open phpMyAdmin and create a database called `crud_db`.
   - In `crud_db`, create a table named `users`:
     ```sql
     CREATE TABLE users (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(100),
         email VARCHAR(100)
     );
     ```

2. **Test the PHP CRUD Operations**:
   - Place `php_crud` in the XAMPP `htdocs` folder.
   - Start XAMPP and make sure Apache and MySQL are running.
   - Open `test_crud.php` in a browser by visiting [http://localhost/php_crud/test_crud.php](http://localhost/php_crud/test_crud.php).

3. **View the Registration Site**:
   - Place `registration_site` in the XAMPP `htdocs` folder.
   - In your browser, navigate to the pages:
     - Registration Form: [http://localhost/php_crud/registration_site/index.html](http://localhost/php_crud/registration_site/index.html)
     - Carousel: [http://localhost/php_crud/registration_site/carousel.html](http://localhost/php_crud/registration_site/carousel.html)
     - Profile/About: [http://localhost/php_crud/registration_site/profile.html](http://localhost/php_crud/registration_site/profile.html)

## Technologies Used

- **PHP**: Backend scripting for CRUD operations.
- **MySQL**: Database for storing user records.
- **HTML/CSS**: Frontend design for the registration site.
- **JavaScript**: Carousel functionality.

## Contact

For questions or contributions, please reach out at (mailto:tobi4tee@gmail.com).
