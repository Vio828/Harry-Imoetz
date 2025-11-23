# KIZUNA Webite

KIZUNA Website lets customers order directly from Kizuna without waiting in line.
Choose pickup or have your favorite dishes delivered straight to your door.

## Features

- Online Ordering – Place pickup or delivery orders directly from the website.
- Real-Time Menu – Browse an up-to-date menu with prices and photos.
- Customizable Orders – Add notes or special requests for each item.
- User Accounts – Save addresses, view order history, and reorder quickly.

## Installation

```
1. Clone the repository
git clone https://github.com/Vio828/Harry-Imoetz.git

2. Navigate to the project folder
cd Harry-Imoetz

3. Add project
git add .

4. Git commit
git commit -m "feat: initial commit"

5. Git push
git push -u origin branch_name

6. Create branch
git checkout -b name/task
```

Lastly open the folder you cloned on your computer and double click the SignIn.html or SignUp.html. Now you have your own KIZUNA website on your computer.

## How to use

1. **Open the Project**  
   Open the project in a browser or use the folder you cloned to start on the **Home** page.

2. **Sign Up / Sign In**  
   Click the **Account** link in the navigation bar to create an account or sign in.

3. **Browse & Order**  
   After signing in, you can view the **Menu**, check the **Contact** information, see **Restaurant Branches**, and manage your **Cart**.

4. **Add Items & Checkout**  
   When you’re ready, go to the **Cart** page and click **Continue** to proceed to checkout.

5. **Enter Details & Payment**  
   Fill in the required information, select **Pickup** or **Delivery**, choose a payment method, and confirm your order.

6. **Order Summary**  
   Once confirmed, you’ll see an order summary and can return to the **Home** page.

## Architecture

1. Home page
2. Sign In
3. Sign Up
4. Menu
5. Branches
6. Contact
7. Cart
8. Account

## Database setup

CREATE DATABASE sushi_order;
USE sushi_order;
CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
email VARCHAR(100) UNIQUE NOT NULL,
phone VARCHAR(20),
password VARCHAR(255) NOT NULL,
address TEXT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE sushi_menu (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
description TEXT,
price INT NOT NULL,
category VARCHAR(50),
image VARCHAR(255),
is_available TINYINT(1) DEFAULT 1,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE cart (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT NOT NULL,
sushi_id INT NOT NULL,
quantity INT DEFAULT 1,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (user_id) REFERENCES users(id),
FOREIGN KEY (sushi_id) REFERENCES sushi_menu(id)
);
CREATE TABLE orders (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT NOT NULL,
total_price INT NOT NULL,
status ENUM('pending','confirmed','preparing','delivering','completed','cancelled')
DEFAULT 'pending',
payment_status ENUM('unpaid','paid','failed') DEFAULT 'unpaid',
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (user_id) REFERENCES users(id)
);
CREATE TABLE order_items (
id INT AUTO_INCREMENT PRIMARY KEY,
order_id INT NOT NULL,
sushi_id INT NOT NULL,
quantity INT NOT NULL,
price INT NOT NULL,
FOREIGN KEY (order_id) REFERENCES orders(id),
FOREIGN KEY (sushi_id) REFERENCES sushi_menu(id)
);
CREATE TABLE payments (
id INT AUTO_INCREMENT PRIMARY KEY,
order_id INT NOT NULL,
payment_method ENUM('cash','transfer','ewallet') NOT NULL,
amount INT NOT NULL,
payment_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (order_id) REFERENCES orders(id)
);
INSERT INTO sushi_menu (name, description, price, category, image)
VALUES
('Salmon Nigiri', 'Fresh salmon on rice.', 25000, 'Nigiri', 'salmon_nigiri.jpg'),
('Tuna Sashimi', 'Premium tuna slices.', 45000, 'Sashimi', 'tuna_sashimi.jpg'),
('California Roll', 'Crab stick, avocado, cucumber.', 30000, 'Roll', 'california_roll.jpg'),
('Tempura Bento', 'Fried shrimp tempura with rice.', 55000, 'Bento', 'tempura_bento.jpg'),
('Ocha Tea', 'Traditional Japanese green tea.', 10000, 'Drink', 'ocha_tea.jpg');
