# Build, Break, Learn, Blog

## Project Description
This is a blog application named **Build, Break, Learn, Blog** built with Laravel 12 and MySQL. The application allows users to create, read, update, and delete blog posts, providing a platform for sharing knowledge and experiences.

## Features
- User authentication and authorization
- Create, edit, and delete blog posts
- Commenting system for posts
- Tagging system for categorizing posts
- Responsive design for mobile and desktop
- Admin panel for managing users and posts

## Installation Steps
1. Clone the repository:
   ```bash
   git clone https://github.com/Njeri-Macharia/bblb_project.git
   cd bblb_project
   ```
2. Install dependencies:
   ```bash
   composer install
   npm install
   ```
3. Set up the environment file:
   ```bash
   cp .env.example .env
   ```
4. Generate the application key:
   ```bash
   php artisan key:generate
   ```
5. Set up the database:
   - Create a new MySQL database.
   - Update the `.env` file with your database credentials.
6. Run migrations:
   ```bash
   php artisan migrate
   ```
7. Seed the database (optional):
   ```bash
   php artisan db:seed
   ```
8. Compile assets:
   ```bash
   npm run dev
   ```

## Environment Setup
- PHP >= 8.1
- Laravel 12
- MySQL
- Node.js and npm for asset compilation

## Basic Usage
- Start the local development server:
   ```bash
   php artisan serve
   ```
- Access the application at `http://localhost:8000`.
- Register a new user or log in to start creating blog posts.

For more detailed documentation, refer to the [Laravel documentation](https://laravel.com/docs/12.x).

