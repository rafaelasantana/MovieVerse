# Introduction 

MovieVerse is a movie application that allows users to discover, search, and explore a collection of movies. This user manual provides step-by-step instructions on how to set up and use the MovieVerse application as a PHP project running on Ampps.

# Table of Contents
1. System Requirements
2. Installation
3. User Registration
4. User Login
5. Homepage Overview
6. Search Functionality
7. Movie Details
8. Watchlist
9. User Profile

    
## 1. System Requirements:
Before installing and running MovieVerse, ensure that your system meets the following minimum requirements:
- Operating System: Windows 10, macOS, or Linux
- Web Server: Ampps (or any similar PHP server solution)
- PHP Version: 7.4 or higher
- Database: MySQL
- Web Browser: Google Chrome, Mozilla Firefox, or Safari
- Internet connection
##  2. Installation:
1. Download the MovieVerse source code files from the provided source.
2. Import the MovieVerse database:
   - Locate the database import file (`movieverse.sql`) provided in the source.
   - Open your preferred MySQL database management tool (e.g., phpMyAdmin).
   - Create a new database for MovieVerse (e.g., "movieverse").
   - Import the `movieverse.sql` file into the newly created database. This file contains the necessary database structure and sample data.
3. Install and configure Ampps on your system if needed.
4. Copy the MovieVerse source code files to the Ampps "www" directory:
   - Navigate to your Ampps installation folder.
   - Open the "www" directory.
   - Create a new folder for MovieVerse (e.g., "movieverse").
   - Copy all the MovieVerse source code files into this new folder.
5. Launch Ampps and start the Apache and MySQL services.
6. Set up the database connection
   - Open the `includes/db_handler.inc.php` file located in the MovieVerse source code.
   - Set the database connection details in the `db_handler.inc.php` file. Update the following variables:
     - `$host`: Replace with the host of your MySQL database server.
     - `$user`: Replace with the username for accessing your MySQL database.
     - `$password`: Replace with the password for the specified username.
     - `$database`: Replace with the name of the MovieVerse database created in step 2.

   Example:
$host ="localhost";
$user = "root";
$password ="mysql";
$database = "movieverse";

   - Save the changes made to the `db_handler.inc.php` file.

7. Open your web browser and navigate to `http://localhost/movieverse`:
   - Replace "localhost" with your Ampps domain or IP address if necessary.
   - Append "/movieverse" to the URL to access the MovieVerse application.

Please ensure the database credentials are correctly set in the `includes/db_handler.inc.php` file before installing. This will ensure that the MovieVerse application can establish a connection to the database and function properly.

##  3. User Registration:
To create a new account and register as a user in MovieVerse, follow these steps:
1. Access the MovieVerse login page by visiting `http://localhost/movieverse` (or your Ampps domain or IP address).
2. Click on the "Sign Up" button.
3. Fill in all the required information, including your name, email address, and password.
4. Click the "Sign Up" button to create your account.
5. Upon successful registration, you will be redirected to the login page.

##  4. User Login:
To log in to your MovieVerse account, follow these steps:
1. Access the MovieVerse login page by visiting `http://localhost/movieverse/login` (or your Ampps domain or IP address).
2. Enter your registered email address and password.
3. Click the "Log In" button.
4. If the entered credentials are valid, you will be logged in to your account and directed to your profile page.

##  5. Homepage Overview:
The homepage is the main screen of MovieVerse, where you can discover and explore movies. Here's an overview of the homepage features:
- Movie recommendations
- Search functionality
##  6. Search Functionality:
MovieVerse provides a search functionality to help you find specific movies. To search for a movie, follow these steps:
1. On the homepage, locate the search bar at the top of the screen.
2. Enter the title or keywords related to the movie you want to find.
3. Click the search icon.
4. MovieVerse will display the search results based on your query.
5. Click on “View Details” to see more details about a movie.
##  7. Movie Details:
When you find a movie you are interested in, you can view its details. To access movie details, follow these steps:
1. On the homepage or search results, click on the “View Details” button.
2. The movie details page will open, showing the duration, cast, ratings and description for that movie.
4. Add the movie to your watchlist, your favorites, or mark it as watched using the respective buttons.
##  8. Watchlist:
The watchlist feature allows you to save movies for later viewing. To manage your watchlist, follow these steps:
1. While browsing a movie or viewing its details, click the "Watch Later" button.
2. The movie will be added to your watchlist, accessed from the user profile.
3. To remove a movie from your watchlist, go to the user profile, then to the watchlist and select the ‘trash’ icon next to the movie name.
##  9. User Profile:
Your user profile contains information about your account and movie preferences. To access your profile, follow these steps:
1. On the navigation bar, select “Profile”.
2. The user profile page will open, displaying your basic information and movie lists.
3. You can edit your profile details by clicking on “Edit Profile”.

# Conclusion:
This user manual provides a comprehensive guide on how to set up and use the MovieVerse application specifically for a PHP project running on Ampps. By following the instructions outlined in this manual, users can easily explore and enjoy a wide range of movies. For further assistance or inquiries, please contact our customer support team.
