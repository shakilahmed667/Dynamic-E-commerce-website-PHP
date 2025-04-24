# Dynamic-E-commerce-website-PHP
This is a dynamic PHP-based e-commerce application featuring a carousel for showcasing images, a product listing section that fetches data from a MySQL database, and pagination for navigation. The application also includes registration and login functionality, with alerts for successful user actions.

Features
Image Carousel: Displays a rotating set of images.
Dynamic Product Listing: Fetches and displays products from a MySQL database.
Pagination: Supports navigation across multiple pages of products.
Registration Success Alert: Notifies users upon successful registration.
Responsive Design: Adjusts to different screen sizes.
Technologies Used
Front-End: HTML, CSS, JavaScript, Bootstrap
Back-End: PHP
Database: MySQL
Installation
Follow these steps to set up the project locally:

Clone the Repository:
https://github.com/Shakil-Ahmed-Sk/E-commerce-Electric-Shop.git

Set Up the Database:
Import the database.sql file into your MySQL server. Update database credentials in the includes/config.php file: php Copy code $conn = new mysqli("host", "username", "password", "database_name"); Configure the Environment:

Place the project files in the root directory of your web server (e.g., htdocs for XAMPP). Start your local web server and ensure PHP and MySQL are running. Run the Application:

Open your browser and navigate to http://localhost/your-project-folder. File Structure lua Copy code project-folder/ |-- admin/ | |-- upload/ # Uploaded product images |-- images/ | |-- carousel/ # Carousel images |-- includes/ | |-- config.php # Database configuration | |-- headerNav.php # Header navigation | |-- footer.php # Footer section |-- js/ | |-- jquery.js # jQuery library | |-- bootstrap.min.js # Bootstrap JS | |-- electricshop.js # Custom JS |-- index.php # Main entry point |-- product.php # Individual product page Usage Add carousel images to the images/carousel directory. Add product images to the admin/upload directory. Add product data to the MySQL database via an admin panel or directly using SQL. Pagination Logic Items per page: 8 Dynamic generation: Adjusts number of pages based on total products in the database. Active Page Highlighting: The current page is visually indicated in the pagination bar. Demo Include screenshots or a link to a live demo if available.

Contributing Contributions are welcome! Follow these steps to contribute:

Fork the repository. Create a new branch: bash Copy code git checkout -b feature-name Commit your changes: bash Copy code git commit -m "Add feature-name" Push to the branch: bash Copy code git push origin feature-name Open a Pull Request. License This project is licensed under the MIT License.

Contact For any questions or feedback, feel free to reach out:

Email: shakilahmedsk35@gmail.com
