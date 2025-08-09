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

Here, I practice what I learn — committing small but meaningful changes while applying best practices.  
Think of this repo as my Laravel growth diary. 🌱

---

## 🗓 Learning Log

> **Note:** Learnings from earlier days (yesterday, yesterday-yesterday, and so on) will be added later — for now, logging starts from today.

**Commit:** `refactor: move grids data to model with driver lookup and 404 handling`  
- How to move hardcoded data from routes into a **Model** for better organization.
- Defining **static methods** (`driver()` and `findDriver()`) to encapsulate behavior.
- Using `Arr::first()` to retrieve specific data by a given key.
- Handling unexpected cases with `abort(404)` and letting Laravel automatically turn that into a proper HTTP response.
- A bit about **encapsulation** and separating concerns in Laravel.

---

## ⚒ Tech Stack
- **Laravel 11**
- **PHP 8.x**
- Composer
- Laravel Sail (Docker)

---

## 📜 License
This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).
