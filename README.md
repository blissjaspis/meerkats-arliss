# Meerkats Company Website

A campus project designing the appearance of the Meerkats company website. This is a modern, responsive website built with Laravel and Livewire.

## Features

- **Welcome Page**: Landing page with company overview
- **Products**: Showcase of company products with images
- **Machinery**: Display of industrial machinery and equipment
- **About**: Company information and background
- **Contact**: Contact form for customer inquiries

## Tech Stack

- **Backend**: Laravel 12 (PHP 8.2+)
- **Frontend**: Livewire 4.2, Tailwind CSS 4.0, Vite
- **Database**: SQLite
- **Package Manager**: pnpm

## Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js (with pnpm)
- SQLite extension enabled in PHP

## Installation & Setup

### Quick Setup

Run the automated setup command:

```bash
composer run setup
```

This will:
1. Install PHP dependencies
2. Copy `.env.example` to `.env`
3. Generate application key
4. Run database migrations
5. Install Node.js dependencies
6. Build assets

### Manual Setup

If you prefer manual setup, follow these steps:

1. **Install PHP dependencies:**
   ```bash
   composer install
   ```

2. **Set up environment file:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Run database migrations:**
   ```bash
   php artisan migrate
   ```

4. **Install frontend dependencies:**
   ```bash
   pnpm install
   ```

5. **Build assets:**
   ```bash
   pnpm run build
   ```

## Usage

### Development Mode

Start the development server with all services:

```bash
composer run dev
```

This command starts:
- Laravel development server
- Queue worker
- Log monitor (Pail)
- Vite dev server with HMR

Then open your browser and navigate to `http://localhost:8000`

### Production Build

For production deployment:

```bash
pnpm run build
```

### Running Tests

Execute the test suite:

```bash
composer run test
```

## Project Structure

```
├── app/
│   └── Livewire/           # Livewire components (Welcome, Product, About, Contact, Machinery)
├── resources/
│   ├── views/              # Blade templates
│   │   ├── layouts/        # Header, footer, app layout
│   │   └── livewire/       # Component views
│   └── css/                # Tailwind CSS styles
├── public/images/          # Static images
│   ├── products/           # Product images
│   ├── customers/          # Customer photos
│   ├── machine/            # Machinery images
│   ├── logo.png            # Company logo
│   └── background.png      # Site background
├── routes/
│   └── web.php             # Web routes
└── database/               # Migrations and seeders
```

## Available Routes

- `/` - Welcome page (landing)
- `/product` - Product showcase
- `/machinery` - Machinery gallery
- `/about` - About the company
- `/contact` - Contact form

## License

This project is for educational purposes as part of a campus assignment.
