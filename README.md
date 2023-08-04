# PHP CRUD App - User Management System

This is a simple PHP CRUD (Create, Read, Update, Delete) application for managing user data. The app allows you to perform basic operations on user records, such as creating, reading, updating, and deleting user information.

## Features

- Create a new user with a unique ID, name, email, and password.
- View a list of all existing users in the system.
- Edit user details, including name, email, and password.
- Delete users from the system.

## Requirements

- PHP 7.0 or higher
- MySQL or any other compatible database system
- Web server (e.g., Apache, Nginx)

## Installation

1. Clone the repository to your local machine.
2. Configure the database connection settings in the `db.php` file.

## Usage

1. Start your web server and ensure PHP is properly configured.
2. Open the `index.php` file in your web browser. This will display a list of all existing users in the system.
3. To create a new user, click on the "Add User" button and fill in the required information in the form.
4. To edit a user's details, click the "Edit" button next to the user you want to update. This will open a form with the current user details. Make your changes and click "Update" to update the user.
5. To delete a user, click the "Delete" button next to the user you wish to remove. A confirmation prompt will appear, and upon confirmation, the user will be permanently deleted from the database.

## File Structure

- `index.php`: Displays the list of users and provides options to add, edit, and delete users.
- `create.php`: Handles the form submission for adding a new user to the database.
- `update.php`: Handles the form submission for updating an existing user's information.
- `delete.php`: Handles the deletion of a user from the database.
- `db.php`: Contains the database connection settings.

## Tech stack

<div>
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white"><br>
  <img src="https://img.shields.io/badge/bootstrap-%238511FA.svg?style=for-the-badge&logo=bootstrap&logoColor=white"><br>
  <img src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white"><br>
  <img src="https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white">
</div>

## Security

- This is a simple example app and does not implement advanced security measures. It's recommended to add further security enhancements before deploying it to a production environment.
- Always validate and sanitize user input to prevent SQL injection and other vulnerabilities.

## Contribution

Feel free to contribute to this project by submitting pull requests. You can report issues or suggest improvements by opening new issues.

## License

This project is licensed under the [MIT License](LICENSE).
