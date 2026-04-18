# EcoShare 🍱👕

## Overview
EcoShare is a web-based platform designed to reduce food and clothing waste in Nairobi by connecting donors (restaurants, supermarkets, and individuals) with NGOs and communities in need.

## Problem Statement
In Nairobi, large amounts of edible food and usable clothing are discarded daily, while many people lack access to basic resources.

## Solution
EcoShare provides a centralized platform where:
- Donors can post surplus food or clothing
- NGOs can claim and distribute resources
- Volunteers assist with pickups and delivery

## Features
- User authentication (Donors, NGOs, Volunteers, Admin)
- Food donation posting with expiry tracking
- Clothing donation management
- Claim system
- Pickup scheduling

## Tech Stack
- Laravel (PHP)
- MySQL
- HTML, CSS, JavaScript
- XAMPP

## Installation

```bash
git clone https://github.com/Martinaperes/ecoshare.git
cd ecoshare
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
