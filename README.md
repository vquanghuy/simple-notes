# Simple Notes

A basic, lightweight web application for creating, reading, updating, and deleting simple text notes, designed for compatibility with older mobile devices.

## Description

This project aims to provide a functional note-taking application accessible even on devices with very limited browser capabilities, such as older BlackBerry models. It prioritizes simplicity, minimal resource usage, and server-side rendering to ensure compatibility.

## Features

*   Create, read, update, and delete notes (CRUD operations).
*   Simple authentication (for demonstration purposes only - see security notes).
*   Minimalist UI for compatibility with older browsers.
*   Built with CodeIgniter 4 (PHP framework).

## Technologies Used

*   PHP 8.3 and above
*   CodeIgniter 4
*   SQLite
*   HTML
*   Minimal CSS

## Installation

1.  **Clone the repository:**

    ```bash
    git clone git@github.com:vquanghuy/simple-notes.git
    ```

2.  **Navigate to the project directory:**

    ```bash
    cd simple-notes
    ```

3.  **Install Composer dependencies:**

    ```bash
    composer install
    ```

4.  **Copy the `.env.example` file to `.env` and configure your database settings:**

    ```bash
    cp .env.example .env
    ```

5.  **Run database migrations:**

    ```bash
    php spark migrate
    ```

6.  **Start the development server (or configure your web server):**

    ```bash
    php spark serve
    ```

7.  **Access the application in your browser at `http://localhost:8080` (or the appropriate URL).**

## Authentication

The application includes very basic authentication for demonstration. The default username is `admin` and the password is `password123`. **DO NOT USE THESE CREDENTIALS IN A PRODUCTION ENVIRONMENT.**

## Security Notes

*   **Password Hashing:** The current authentication method is extremely insecure. In a production environment, you **must** use proper password hashing (e.g., `password_hash()` and `password_verify()` in PHP) or a robust authentication library.
*   **Input Validation:** Implement robust input validation to prevent vulnerabilities such as Cross-Site Scripting (XSS) and SQL injection.

## Deployment

1.  **Removing Dev Packages:**

    ```bash
    composer install --no-dev
    ```
2. **Upload to shared host**

Consult the CodeIgniter 4 documentation for further deployment details.

## Compatibility

This application is designed to be compatible with older mobile browsers, such as those found on BlackBerry devices. However, due to the wide range of browser versions and capabilities, thorough testing on target devices is highly recommended.

## Future Improvements

*   Implement proper password hashing and a more robust authentication system.
*   Add more robust input validation.
*   Improve error handling and user feedback.
*   Consider adding basic offline support (if feasible for target devices).

## Contributing

Contributions are welcome! Please open an issue or submit a pull request.

## License

[MIT](LICENSE)
