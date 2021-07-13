# Skeleton App

This package is not recommended for use in production environment.

## Install 

```bash
composer create-project brenoroosevelt/app [app-name]
```

* Ensure `tmp/` is web writable.

## Development environment

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
