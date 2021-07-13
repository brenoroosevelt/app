# Skeleton App

## Install 

```bash
composer create-project brenoroosevelt/app [app-name]
```

Replace `[app-name]` with the desired directory name for your new application.

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writable.

# Development environment

```bash
cd [app-name]
composer start
```

Or using Docker: 
```bash
cd [app-name]
docker-compose up -d
```
After that, open `http://localhost:8080` in your browser.

## Run test suite

```bash
composer test
```

## Run analysis
* Test Suit
* Static Analyse
* Coding Standard

```bash
composer check
```
