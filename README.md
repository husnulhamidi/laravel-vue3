# Discussion Forum Application

This discussion forum application is built using modern technologies to ensure optimal performance, security, and user experience. Below are the main technologies used:

## Technologies Used

1. **Laravel 11**: The primary backend framework for building the application's API and logic.
2. **Vue 3**: A modern JavaScript framework for building interactive user interfaces (UI).
3. **Inertia.js**: Seamlessly connects the frontend and backend without requiring a full REST or GraphQL API.
4. **Vite**: A modern build tool for frontend development with blazing-fast build times.
5. **Ziggy**: Simplifies the use of Laravel routes in JavaScript.
6. **Fortify**: Provides secure authentication features like login, registration, and account management.

## Key Features
- Thread-based discussions with a category system.
- Secure authentication system (login, registration, account settings).
- Responsive and interactive user interface.
- Smooth navigation between pages powered by Inertia.js.
- Backend route management directly in the frontend using Ziggy.

## Installation Steps

1. Clone this repository:
   ```bash
   git clone <repository-url>
   cd <project-directory>
   ```

2. Install Laravel dependencies:
   ```bash
   composer install
   ```

3. Install frontend dependencies:
   ```bash
   npm install
   ```

4. Copy the `.env.example` file to `.env` and configure it:
   ```bash
   cp .env.example .env
   ```

5. Generate the application key:
   ```bash
   php artisan key:generate
   ```

6. Run database migrations:
   ```bash
   php artisan migrate
   ```

7. Build frontend assets:
   ```bash
   npm run build
   ```

8. Start the development server:
   ```bash
   php artisan serve
   npm run dev
   ```

The application will be available at [http://localhost:8000](http://localhost:8000).

## Contribution
We welcome contributions from everyone! Please create a pull request or open an issue if you encounter any problems or have ideas for new features.

---

Happy coding, and we hope this application is useful!

