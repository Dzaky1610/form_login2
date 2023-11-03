<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>


          /* Reset CSS */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Styling for the Navbar */
.navbar {
  background-color: #333;
  overflow: hidden;
}

.navbar a.logo {
  font-size: 24px;
  float: left;
  padding: 10px 20px;
  color: white;
  text-decoration: none;
}

.navbar .nav-links {
  float: right;
}

.navbar .nav-links a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar .menu-icon {
  display: none;
  float: right;
  padding: 14px 16px;
  cursor: pointer;
  color: white;
}


.content {
  margin: 20px;
}

h1 {
  font-size: 24px;
  margin-bottom: 20px;
}

.inventory-table {
  width: 100%;
  border-collapse: collapse;
  border: 1px solid #ddd;
}

.inventory-table th, .inventory-table td {
  border: 1px solid #ddd;
  padding: 10px;
  text-align: center; 
}

.inventory-table th {
  background-color: #333;
  color: white;
}

.inventory-table tr:nth-child(even) {
  background-color: #f2f2f2;
}

/* Responsiveness (sama seperti sebelumnya) */

/* Style the navigation menu when it's responsive (sama seperti sebelumnya) */

/* Style the navigation links when it's responsive (sama seperti sebelumnya) */

/* Add a background color to the active link (sama seperti sebelumnya) */






/* Responsiveness */
@media screen and (max-width: 768px) {
  .navbar .nav-links {
    display: none;
  }

  .navbar .menu-icon {
    display: block;
  }

  .navbar.responsive .nav-links {
    display: block;
  }
}

/* Style the navigation menu when it's responsive */
.navbar.responsive .menu-icon {
  background-color: #333;
}

/* Style the navigation links when it's responsive */
.navbar.responsive .nav-links a {
  display: block;
  text-align: left;
  width: 100%;
  padding: 10px 20px;
}

/* Add a background color to the active link */
.navbar a.active {
  background-color: #ddd;
  color: black;
}




    </style>

</head>
<body>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="navbar">
  <a href="#" class="logo">Inventory App</a>
  <div class="nav-links">
    <a href="#">Home</a>
    <a href="#">Products</a>
    <a href="#">Categories</a>
    <a href="#">About Us</a>
    <a href="#">Contact</a>
  </div>
  <div class="menu-icon">
    <i class="fa fa-bars"></i>
  </div>
</div>

<div class="content">
  <h1>Inventory List</h1>
  <table border='1'>
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Product 1</td>
        <td>Category A</td>
        <td>10</td>
        <td>$20.00</td>
      </tr>
      <tr>
        <td>Product 2</td>
        <td>Category B</td>
        <td>15</td>
        <td>$25.00</td>
      </tr>
      <tr>
        <td>Product 3</td>
        <td>Category A</td>
        <td>8</td>
        <td>$18.00</td>
      </tr>
      <!-- Tambahkan lebih banyak baris sesuai dengan inventaris Anda -->
    </tbody>
  </table>
</div>


</body>
</html>

    
    
</body>
</html>