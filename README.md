<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<h2 align="center">My Laravel Learning Journey</h2>

---

## 📚 About This Repository

This is my personal Laravel learning playground.  
I’m following the **[Laracasts: 30 Days to Learn Laravel 11](https://laracasts.com/series/30-days-to-learn-laravel-11)** tutorial series.  

I’m building everything using **Laravel Sail** (Docker) as my development environment.  
Think of this repo as my Laravel growth diary. 🌱

---

## 🗓 Learning Log

> **Note:** Earlier learnings (yesterday, yesterday-yesterday, etc.) will be added later — for now, logging starts from today.

---

### 📌 Entry 1 — *Refactor grids data into a model with driver lookup and 404 handling*
**Commit:** `refactor: move grids data to model with driver lookup and 404 handling`  

**What I learned:**
- Moved hardcoded driver data from routes into a **Model** for better organization.
- Added **static methods** (`driver()` and `findDriver()`) to encapsulate logic.
- Used `Arr::first()` to find specific data by key.
- Handled missing data gracefully with `abort(404)`.
- Learned more about **encapsulation** and separating concerns in Laravel.
- Continued working entirely with **Laravel Sail & Docker** for development.
- Practiced running commands and testing code inside the Sail container.

---

### 📌 Entry 2 — *Create migration for grids table*
**Commit:** `feat: create grids table migration`  

**What I learned:**
- How to create a new migration using Laravel’s **Sail artisan** command.
- Defined a `grids` table with:
  - `driver_name` (string) for storing the driver's full name.
  - `constructor` (string) for storing the team name.
  - `path` (string) for storing the image file path.
- Added timestamps to track record creation and updates.
- Understood how migrations provide a version-controlled database schema.
- Ran and tested migrations using **Laravel Sail & Docker**.

---

## ⚒ Tech Stack
- **Laravel 11**
- **PHP 8.x**
- Composer
- **Laravel Sail (Docker)**

---

## 📜 License
This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).
