# Laravel Authentication Demo App

A beautiful, modern authentication system built with Laravel 12 and Tailwind CSS, featuring custom sign-up and sign-in pages with a stunning UI.

![Laravel](https://img.shields.io/badge/Laravel-12.44.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2.12-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.0-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)

## ✨ Features

### 🔐 Authentication System

-   **Custom Sign Up** - Beautiful registration form with validation
-   **Custom Sign In** - Secure login with session management
-   **Dashboard** - Protected user dashboard
-   **Logout** - Secure session destruction

### 🎨 Modern UI Design

-   **Radial Gradient Backgrounds** - Stunning purple-to-white gradient
-   **Split-Screen Layout** - Marketing content on left, form on right
-   **Glassmorphic Cards** - Modern, translucent design elements
-   **Responsive Design** - Works perfectly on mobile, tablet, and desktop
-   **Social Login Buttons** - Ready for Google & Apple integration
-   **Smooth Animations** - Hover effects and transitions

### 💾 Database

-   **Dual Table Storage** - Stores users in both `users` and `sign_ups` tables
-   **Secure Password Hashing** - Bcrypt encryption
-   **Email Uniqueness** - Validates across both tables
-   **Session Management** - Database-driven sessions

### 🛡️ Security Features

-   **Password Validation** - Minimum 8 characters, confirmed
-   **Email Validation** - Proper email format checking
-   **CSRF Protection** - Built-in Laravel CSRF tokens
-   **Session Security** - Secure session handling
-   **Password Hashing** - Bcrypt with salt

## 📋 Prerequisites

Before you begin, ensure you have the following installed:

-   **PHP** >= 8.2
-   **Composer** - PHP dependency manager
-   **MySQL** >= 8.0
-   **Node.js & NPM** (optional, for asset compilation)
-   **Git** - Version control

## 🚀 Installation

### 1. Clone the Repository

```bash
git clone https://github.com/YOUR_USERNAME/Laravel_Auth_Demo_App.git
cd Laravel_Auth_Demo_App
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Configure Environment

Copy the example environment file and generate an application key:

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure Database

Edit the `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_auth_db
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 5. Create Database

Create the database in MySQL:

```sql
CREATE DATABASE laravel_auth_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Or let Laravel create it for you when running migrations (it will prompt).

### 6. Run Migrations

```bash
php artisan migrate
```

This will create the following tables:

-   `users` - Main user table
-   `sign_ups` - Custom signup tracking
-   `sessions` - Session storage
-   `cache` - Cache storage
-   `jobs` - Background jobs

### 7. Start the Development Server

```bash
php artisan serve
```

Visit: `http://localhost:8000`

## 📱 Usage

### Sign Up

1. Navigate to `http://localhost:8000/signup`
2. Fill in:
    - Name
    - Email
    - Password (min 8 characters)
    - Repeat Password
3. Accept terms
4. Click "Sign Up"
5. Redirected to Sign In page with success message

### Sign In

1. Navigate to `http://localhost:8000/signin`
2. Enter email and password
3. Optionally check "Remember me"
4. Click "Sign In"
5. Redirected to Dashboard

### Dashboard

-   View your account information
-   See user stats and activity
-   Access to logout

### Logout

-   Click "Logout" in the navigation bar
-   Session destroyed
-   Redirected to home page

## 🗂️ Project Structure

```
Laravel_Auth_Demo_App/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── SignUpController.php    # Handles registration
│   │       └── SignInController.php     # Handles authentication
│   └── Models/
│       ├── User.php                     # User model
│       └── SignUp.php                   # SignUp model
├── database/
│   └── migrations/
│       └── 2025_12_31_021847_create_sign_ups_table.php
├── resources/
│   └── views/
│       ├── welcome.blade.php            # Landing page
│       ├── Signup.blade.php             # Registration page
│       ├── SignIn.blade.php             # Login page
│       └── dashboard.blade.php          # User dashboard
├── routes/
│   └── web.php                          # Application routes
└── public/
    └── index.php                        # Entry point
```

## 🎨 UI Components

### Welcome Page

-   Modern hero section
-   Feature cards
-   Call-to-action buttons
-   Responsive navbar

### Sign Up / Sign In Pages

-   Split-screen layout
-   Marketing content on left side
-   Form on right side
-   Social login buttons (UI ready)
-   Error/success message display
-   Form validation feedback

### Dashboard

-   User profile display
-   Activity cards
-   Account information
-   Logout functionality

## 🔧 Configuration

### Session Configuration

Sessions are stored in the database for better scalability. Configure in `.env`:

```env
SESSION_DRIVER=database
SESSION_LIFETIME=120
```

### Database Tables

**users table:**

-   id
-   name
-   email (unique)
-   password (hashed)
-   email_verified_at
-   remember_token
-   created_at
-   updated_at

**sign_ups table:**

-   id
-   name
-   email (unique)
-   password (hashed)
-   created_at
-   updated_at

## 🌐 Deployment

For deployment instructions, see:

-   [Deploy to Railway.app](.agent/workflows/deploy-to-railway.md)

Quick deployment options:

-   **Railway.app** - Easiest, free tier available
-   **Heroku** - Classic PaaS solution
-   **DigitalOcean** - App Platform
-   **AWS** - EC2 + RDS
-   **Vercel/Netlify** - Frontend (requires API backend)

## 🧪 Testing

Test the authentication flow:

```bash
# Create a test user
php artisan tinker
>>> App\Models\User::create(['name' => 'Test User', 'email' => 'test@example.com', 'password' => bcrypt('password123')]);
```

## 🛠️ Development

### Clear Caches

```bash
php artisan optimize:clear
```

### Rebuild Caches

```bash
php artisan optimize
```

### View Routes

```bash
php artisan route:list
```

### Database Reset

```bash
php artisan migrate:fresh
```

## 🐛 Troubleshooting

### Database Connection Error

-   Verify MySQL is running
-   Check database credentials in `.env`
-   Ensure database exists
-   Run `php artisan config:clear`

### 500 Server Error

-   Check file permissions
-   Run `php artisan optimize:clear`
-   Check Laravel logs in `storage/logs/`

### CSS Not Loading

-   Using Tailwind CDN (no build required)
-   Clear browser cache

## 📚 Technologies Used

-   **Laravel 12.44.0** - PHP Framework
-   **PHP 8.2.12** - Programming Language
-   **MySQL 8.0** - Database
-   **Tailwind CSS** - CSS Framework (CDN)
-   **Inter Font** - Typography (Google Fonts)
-   **Blade** - Templating Engine

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

## 👨‍💻 Author

**Your Name**

-   GitHub: [@yourusername](https://github.com/yourusername)
-   Email: your.email@example.com

## 🙏 Acknowledgments

-   Laravel Team for the amazing framework
-   Tailwind CSS for the utility-first CSS framework
-   Google Fonts for Inter typography
-   Icons from Heroicons

## 📸 Screenshots

### Landing Page

Beautiful gradient background with modern hero section and feature cards.

### Sign Up Page

Split-screen design with marketing content and registration form.

### Sign In Page

Secure login with remember me functionality and social login options.

### Dashboard

User dashboard with profile information and activity cards.

---

**Built with ❤️ using Laravel & Tailwind CSS**
