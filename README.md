# QuickHire Backend API

A simple RESTful backend API for the QuickHire Job Portal.

This API allows candidates to browse jobs, apply for them, and enables admins to manage job postings.

---

### 🌐 Live API

[QuickHire API](https://quick-hire-api.aangonstudio.com/api/jobs)

---

### 🛠️ Technologies Used

- PHP 8+
- Laravel 11
- MySQL
- REST API

---

### ✨ Features

- CRUD operations for jobs (Admin)
- Candidates can submit job applications
- Admin can manage job postings

---

### ⚙️ Setup Locally

1. **Prerequisites**:
    - PHP >= 8.0
    - Composer
    - MySQL / MariaDB
    - Git (optional)

2. **Clone the repository**:

`git clone https://github.com/Rockrayhan/quick-hire-api`
`cd quickhire-backend`

3. **install dependencies:**:
   `composer install`

4. **Set up environment variables:**:

- Copy .env.example to .env:
  `cp .env.example .env`

- Generate Application key
  `php artisan key:generate`

- Update database credentials and other settings in .env:

`DB_CONNECTION=mysql`<br />
`DB_HOST=127.0.0.1`<br />
`DB_PORT=3306`<br />
`DB_DATABASE=quickhire`<br />
`DB_USERNAME=root`<br />
`DB_PASSWORD=`<br />

5. **Run migrations:**:
   `php artisan migrate`

6. **Start the server:**:
   `php artisan serve`

7. **API Endpoints will be available at:**:
   `http://127.0.0.1:8000/api/jobs`
   `http://127.0.0.1:8000/api/applications`

### 🔧API Endpoints Overview

- GET `/api/jobs` List all jobs (with optional search/filter)
- GET `/api/jobs/{id}` Get details of a single job
- POST `/api/jobs` Create a job
- DELETE `/api/jobs/{id}` Delete a job

- POST `/api/applications` Submit a job application
