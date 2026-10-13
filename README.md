# Phue Application Skeleton

A clean, production-ready starter template for building web applications with the [Phue Framework](https://github.com/MakariosVar/phue).

## Creating a New Phue Project

### Option A: Via Composer (Recommended)

Create a fresh Phue project in a single command:

```bash
composer create-project makariosvar/phue-skeleton my-app
cd my-app
```

### Option B: Via Git Clone

Alternatively, clone the skeleton repository directly:

```bash
git clone https://github.com/MakariosVar/phue-skeleton.git my-app
cd my-app
composer install
```

---

## Quick Start

### 1. Configure environment
```bash
cp .env.example .env
./phue generate:key
```

### 2. Start development environment
Using Docker (recommended):
```bash
./phue-docker start
```

Or using native PHP & Bun:
```bash
./phue serve
```

Visit `http://localhost:8000` in your browser.

---

## Running Tests

Run the test suite inside the container or locally:

```bash
./phue-docker exec composer test
# or locally:
composer test
```

---

## Useful Commands

* `./phue make:controller <Name>` — Create a new controller in `App/Controllers/`
* `./phue make:model <Name>` — Create an ActiveRecord model in `App/Models/`
* `./phue make:migration <Name>` — Create a database migration in `database/migrations/`
* `./phue schii:migrate` — Auto-migrate declarative models
* `./phue cache:clear` — Clear compiled views and caches
* `./phue route:cache` — Cache routes for production

---

## Documentation

Full framework documentation, components guide, and API reference:
👉 **[Phue Framework Documentation](https://github.com/MakariosVar/phue/tree/main/docs)**

## License

This skeleton is open-sourced software licensed under the [Apache-2.0 License](LICENSE).
