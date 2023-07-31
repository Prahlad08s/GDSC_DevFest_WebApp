# GDSC_DevFest_WebApp
This is a full-stack web application developed by Prahlad Singh for the Google Developers Student Club (GDSC) DevFest Application Form. 
. The application allows students to apply for the GDSC DevFest event by submitting their details through a user-friendly form. The data provided by the applicants is stored in a MySQL database, ensuring secure and efficient data management.

GDSC DevFest Application Form

# Tech Stack
Front-end:
HTML
CSS
JavaScript
Back-end:
PHP

# Prerequisites

XAMPP: XAMPP is used to create the local development environment with Apache, MySQL, and PHP support.

# Installation and Setup
Clone the repository from GitHub:
git clone https://github.com/your-username/gdsc-devfest-application.git
Move the cloned repository to the XAMPP's web server directory (e.g., htdocs).

Launch XAMPP and start the Apache and MySQL services.

Import the database:

Create a new database named gdsc_devfest in PHPMyAdmin.
Navigate to the database directory in the cloned repository.
Import the gdsc_devfest.sql file into the gdsc_devfest database.
Configure the database connection:

Open config.php located in the includes directory.
Update the database connection details (hostname, username, password) to match your local MySQL settings.

# Usage
Open your web browser and access the application using the following URL:
Copy code
http://localhost/gdsc-devfest-application
You will be directed to the GDSC DevFest Application Form landing page.

Fill out the application form with your details, including name, email address, institution, etc.

After completing the form, click the "Submit" button to send your application.

The submitted data will be stored securely in the MySQL database.

# Contribution
Contributions to the GDSC DevFest Application Form are welcome! If you would like to add new features, fix bugs, or improve the application, feel free to fork the repository and submit pull requests.
Before making significant changes, please discuss your proposed changes through an issue to ensure they align with the project's goals.
