
# 🛒 E-Commerce Application

A modern E-Commerce application built with **Laravel 11**, **Filament Admin Panel**, **Livewire**, **Vite**, and **Tailwind CSS**.

This project includes product management, orders, categories, brands, and an admin dashboard powered by Filament.

---

## 🚀 Tech Stack

- **Laravel 11**
- **Filament v3**
- **Livewire**
- **Vite**
- **Tailwind CSS**
- **SQLite** (default for local development)
- **MySQL** (optional for production)

---

## 📦 Features

- Admin dashboard using Filament
- Product, category, and brand management
- Order management with statuses
- Order statistics (New, Processing, Shipped, Average Price)
- Image uploads with storage linking
- Responsive UI with Tailwind CSS

---

## 🧑‍💻 Installation & Setup

### 1️⃣ Clone the repository
```bash
git clone https://github.com/your-username/e-commerce.git
cd e-commerce
````

---

### 2️⃣ Install backend dependencies

```bash
composer install
```

---

### 3️⃣ Install frontend dependencies

```bash
npm install
```

---

### 4️⃣ Environment setup

Copy the environment file:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

---

### 5️⃣ Database setup

#### Option A — SQLite (recommended for local)

Laravel will automatically create the database:

```bash
php artisan migrate --seed
```

#### Option B — MySQL

Update `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=
```

Then run:

```bash
php artisan migrate --seed
```

---

### 6️⃣ Storage link (required for images)

```bash
php artisan storage:link
```

---

### 7️⃣ Build frontend assets

For development:

```bash
npm run dev
```

For production:

```bash
npm run build
```

---

### 8️⃣ Create Filament admin user

```bash
php artisan make:filament-user
```

Login at:

```
http://127.0.0.1:8000/admin
```

---

### 9️⃣ Run the application

```bash
php artisan serve
```

App URL:

```
http://127.0.0.1:8000
```

---

## 🧹 Clear cache (if needed)

```bash
php artisan optimize:clear
```

---

## 🖼️ File Upload Configuration

Ensure the filesystem disk is set to public:

```env
FILESYSTEM_DISK=public
```

---

## 📊 Admin Dashboard

The admin dashboard includes:

* Order counts by status
* Average order price
* Product and category management

---

## 🛠️ Common Issues

### Images not showing

```bash
php artisan storage:link
php artisan optimize:clear
```

### Vite styles not loading

Make sure this is running:

```bash
npm run dev
```

---

## 📄 License

This project is open-source and available under the **MIT License**.

---

## ✨ Author

Built with ❤️ using Laravel & Filament.

```

If you want, I can:
- add **screenshots**
- add **API documentation**
- customize it for **GitHub**
- write a **production deployment section**

Just tell me 🔥
```
