# To-Do List App – CodeIgniter 4

A simple and responsive To-Do List web application built with CodeIgniter 4 and Bootstrap 5.  
This app allows users to manage daily tasks by adding, completing, and deleting tasks easily.

---

## Features

- Add new tasks
- Mark tasks as "Selesai" or "Belum" using interactive checkbox
- Automatically strike-through task titles when completed
- Delete tasks with confirmation
- Clean user interface with Bootstrap 5
- Secure with CSRF protection
- Follows MVC architecture with CodeIgniter 4

---

## Tech Stack

- PHP 8.x
- CodeIgniter 4.x
- MySQL
- Bootstrap 5

---

## Project Structure

```
to-do-list-app/
├── app/
│   ├── Controllers/ToDoList.php
│   ├── Models/TodoModel.php
│   └── Views/
│       ├── layout/
│       │   ├── header.php
│       │   └── footer.php
│       └── home.php
├── public/
│   └── assets/bootstrap/ (if Bootstrap used offline)
├── .env
└── README.md
```

---

## Installation

### 1. Clone the Repository
```bash
git clone https://github.com/your-username/to-do-list-app.git
cd to-do-list-app
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Configure `.env`
Rename `env` to `.env` and update database settings:

```env
database.default.hostname = localhost
database.default.database = to_do_list_app
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```

### 4. Create the Database Table

```sql
CREATE TABLE `todolist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `status` varchar(50) DEFAULT 'Belum',
  PRIMARY KEY (`id`)
);
```

### 5. Run the Server
```bash
php spark serve
```

Open in browser:
```
http://localhost:8080
```

---

## License

This project is open-sourced under the MIT License.

---

## Credits

- CodeIgniter 4: https://codeigniter.com
- Bootstrap 5: https://getbootstrap.com
