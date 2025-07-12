# Laravel 10 Multi-Tenancy Application

This is a multi-tenant application built with Laravel 10, using the `stancl/tenancy` package for tenancy management and Laravel Breeze for authentication.

## Features

- **Multi-Tenancy**: Each tenant has its own isolated database and domain.
- **Authentication**: User registration and login using Laravel Breeze.
- **Tenant Management**: Easily create and manage tenants.

## Prerequisites

Before you begin, ensure you have the following installed on your local machine:

- **PHP**: >= 8.1
- **Composer**: [v2](https://getcomposer.org/)
- **Node.js**: >= 18.x
- **NPM**: >= 9.x
- **A database server**: (e.g., MySQL, PostgreSQL)

## Installation

Follow these steps to get your development environment set up:

**1. Clone the repository:**

```bash
git clone https://github.com/your-username/your-repository.git
cd your-repository
```

**2. Install PHP dependencies:**

```bash
composer install
```

**3. Install JavaScript dependencies:**

```bash
npm install
```

**4. Set up your environment file:**

Copy the example environment file and generate your application key.

```bash
cp .env.example .env
php artisan key:generate
```

**5. Configure your `.env` file:**

Open the `.env` file and update the following variables, especially your database credentials:

```env
APP_NAME="Laravel Multi-Tenancy"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_central_database
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

**6. Run central database migrations:**

This will create the `tenants` and `domains` tables in your central database.

```bash
php artisan migrate
```

**7. Compile frontend assets:**

```bash
npm run dev
```

**8. Run the development server:**

```bash
php artisan serve
```

Your application should now be running at the URL specified in your `.env` file (e.g., `http://localhost:8000`).

## Multi-Tenancy Usage

### Creating a Tenant

You can create a new tenant using the `tenants:create` command. This will also create a new database for the tenant.

```bash
php artisan tenants:create
```

The command will prompt you for the tenant ID and domain. For example:

- **Tenant ID**: `foo`
- **Domain**: `foo.localhost`

After creating the tenant, you need to add the domain to your `/etc/hosts` file (or equivalent for your OS) to access it locally:

```
127.0.0.1   foo.localhost
```

### Running Tenant Migrations

To run migrations for a specific tenant or all tenants, you can use the `tenants:migrate` command.

```bash
# Migrate a specific tenant's database
php artisan tenants:migrate --tenants=foo

# Migrate all tenants' databases
php artisan tenants:migrate
```

### Accessing Tenant Routes

You can now access the tenant-specific routes by visiting the domain you configured (e.g., `http://foo.localhost:8000`). You can register a new user on the tenant domain, and that user will be created in the tenant's database.

## Running Tests

To run the application's test suite, use the following command:

```bash
php artisan test
```

## Key Packages

- [Laravel 10](https://laravel.com)
- [stancl/tenancy for Laravel](https://tenancyforlaravel.com/)
- [Laravel Breeze](https://laravel.com/docs/10.x/starter-kits#laravel-breeze)
- [Vite](https://vitejs.dev/)
