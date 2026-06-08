Database setup
------------

This project expects a MySQL database named `yustazi_fashion` with an `orders` table.

To create the database and table automatically (using XAMPP's PHP CLI or a browser):

1. From command line (project root):

```bash
php setup_database.php
```

2. Or open in your browser via XAMPP: `http://localhost/yustazi_fashion/setup_database.php`

The script will create the database and `orders` table (if they don't already exist).

If your MySQL root user has a password, edit `setup_database.php` and set `$pass` accordingly.

You can also run the SQL directly using `create_database.sql` in phpMyAdmin or MySQL CLI.
