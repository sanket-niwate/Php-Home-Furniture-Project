# 🪑 Home Furniture Project

## 📖 Project Overview
The **Home Furniture Project** is a mini **E-Commerce Web Application** developed using **PHP and MySQL**.

It is designed to:
- Manage and display furniture products (sofas, tables, chairs, beds, etc.).
- Allow customers to browse items, add them to a shopping cart, and complete checkout.
- Provide an **Admin Panel** for managing furniture products and website content.

This project is useful for:
- Learning **PHP + MySQL integration**
- Understanding **E-commerce workflows** (*cart, checkout, admin panel*)
- Practicing **session handling, authentication, and CRUD operations**

---

## ✨ Features (Detailed)

### 👤 User Side (Frontend)
1. **Home Page**
   - Attractive homepage showcasing categories (*Sofas, Tables, Chairs, Beds, etc.*)
   - Navigation menu (*Home, About, Gallery, Blog, Contact*)
2. **Product Catalog**
   - Category-wise browsing.
   - Product detail pages (*pview.php, pviewsofa.php*) with image, description, and price.
3. **Shopping Cart**
   - Add products, update quantity, or remove items.
   - Auto total bill calculation.
4. **Checkout System**
   - Provide address, contact info, and payment details.
   - Order confirmation page after placing an order.
5. **User Authentication**
   - Register (*register.php*) and login system (*login.php*).
   - Secure session handling + Logout feature.
6. **Extra Pages**
   - **Blog Page** – Furniture tips & trends.
   - **Gallery Page** – Showcase of products.
   - **Testimonials** – Customer feedback.
   - **Contact Us** – Inquiry form.

---

### 🛠 Admin Panel (Backend)
1. **Admin Login (admin.php)**
   - Secured login for admin access.
2. **Product Management**
   - Add / Update / Delete furniture products with images and price.
3. **Order Management**
   - View all user orders.
   - Track & manage order status (*Pending / Completed*).

---

## 🛠 Tech Stack
- **PHP (7.x / 8.x)**
- **HTML, CSS, JavaScript** (Frontend)
- **MySQL Database**
- **Apache / XAMPP / WAMP**

---

## ⚙️ Prerequisites
- Install [XAMPP](https://www.apachefriends.org/) or WAMP.
- Enable **Apache** and **MySQL**.
- Import `furniture.sql` into phpMyAdmin.
- Configure `config.php` with DB credentials.

---

## 🚀 Installation & Setup

### Step 1: Clone the Repository
1. Clone the repository:
 
   ```bash
   git clone https://github.com/sanket-niwate/Php-Home-Furniture-Project.git


### Step 2: Move Project to Server Folder
For XAMPP:  
→ htdocs/Php-Home-Furniture-Project/


### Step 3: Import Database
- Open phpMyAdmin
- Create a new database → Import `furniture.sql`

### Step 4: Configure Database in `config.php`:
 4. Update Database config in config.php:
    
    ```bash
     $servername = "localhost";
     $username   = "root";
     $password   = "";
     $dbname     = "furniture";


### Step 5: Run the Project
5. Start Apache & MySQL → Open in browser:

   ```bash
   http://localhost/Php-Home-Furniture-Project/


---

## ▶️ Usage Guide

### 👤 User Flow
- Open homepage → Browse categories.
- Add products → View cart → Checkout.
- Register/Login if required.
- Fill details → Place order → Confirmation.
- - Visit:
   ```bash
   http://localhost/Php-Home-Furniture-Project

### 🛠 Admin Flow
- Visit:
   ```bash
   http://localhost/Php-Home-Furniture-Project/admin.php
   
- Login as Admin.
- Manage products, view orders, update status.

---

## ✅ Future Enhancements
- Payment gateway integration (*Razorpay, PayPal*)
- Product **search & filter** feature
- User **order history** page
- Admin Dashboard with **analytics & charts**
- Enhanced **security** (password hashing, CSRF protection)

---

## 🗂 Project Structure
Php-Home-Furniture-Project/
│── index.php         # Homepage
│── about.php         # About page
│── blog.php          # Blog page
│── cart.php          # Shopping cart
│── checkout.php      # Checkout page
│── contact.php       # Contact form
│── gallery.php       # Gallery page
│── login.php         # User login
│── register.php      # User registration
│── admin.php         # Admin dashboard
│── config.php        # Database connection
│── furniture.sql     # Database schema and sample data
│
├── css/              # Stylesheets
│   ├── style.css
│   ├── demo.css
│   ├── testimo.css
│
├── images/           # Furniture and design images
├── js/               # (Optional) JavaScript files
└── README.md         # Documentation


---

## 📸 Screenshots

### 🏠 Home Page
<img src="https://github.com/sanket-niwate/php-Home-furniture-/blob/main/php%20furniture%20img/Screenshot%202024-02-09%20171133.png?raw=true" width="1000" height="600">

### 🛋 Product Catalog
<img src="https://github.com/sanket-niwate/php-Home-furniture-/blob/main/php%20furniture%20img/Screenshot%202024-02-09%20171259.png?raw=true" width="1000" height="600">

### 🛒 Cart Page
<img src="https://github.com/sanket-niwate/php-Home-furniture-/blob/main/php%20furniture%20img/Screenshot%202024-02-09%20171311.png?raw=true" width="1000" height="600">

### 📦 Checkout
<img src="https://github.com/sanket-niwate/php-Home-furniture-/blob/main/php%20furniture%20img/Screenshot%202024-02-09%20171401.png?raw=true" width="1000" height="600">

### 🔐 Admin Dashboard
<img src="https://github.com/sanket-niwate/php-Home-furniture-/blob/main/php%20furniture%20img/Screenshot%202024-02-09%20175606.png?raw=true" width="1000" height="600">
<img src="https://github.com/sanket-niwate/php-Home-furniture-/blob/main/php%20furniture%20img/Screenshot%202024-02-09%20175622.png?raw=true" width="1000" height="600">
<img src="https://github.com/sanket-niwate/php-Home-furniture-/blob/main/php%20furniture%20img/Screenshot%202024-02-09%20175643.png?raw=true" width="1000" height="600">
