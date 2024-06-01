<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coffee Shop Admin Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #ffcccc; /* Light red background */
    }
    header {
      background-color: #800000; /* Dark red header */
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    nav {
      background-color: #990000; /* Dark red navigation */
      color: #fff;
      padding: 10px;
    }
    nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    nav ul li {
      display: inline;
      margin-right: 20px;
    }
    nav ul li a {
      color: #fff;
      text-decoration: none;
    }
    section {
      padding: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid #800000; /* Dark red borders */
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #990000; /* Dark red table header */
      color: #fff;
    }
    tr:nth-child(even) {
      background-color: #ffe6e6; /* Light red alternate row */
    }
  </style>
</head>
<body>
  <header>
    <h1>Coffee Shop Admin Dashboard</h1>
  </header>
  <nav>
    <ul>
      <li><a href="#dashboard">Dashboard</a></li>
      <li><a href="#orders">Orders</a></li>
      <li><a href="#inventory">Inventory</a></li>
    </ul>
  </nav>
  <section id="dashboard">
    <h2>Dashboard</h2>
    <p>Welcome to the admin dashboard of our coffee shop!</p>
  </section>
  <section id="orders" style="display:none;">
    <h2>Orders</h2>
    <table>
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Customer Name</th>
          <th>Items</th>
          <th>Total Price</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <!-- Order data will be populated dynamically here -->
      </tbody>
    </table>
  </section>
  <section id="inventory" style="display:none;">
    <h2>Inventory</h2>
    <p>Inventory management functionality will be added here.</p>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Display the dashboard by default
      showDashboard();

      // Add event listeners to navigation links
      document.querySelectorAll('nav ul li a').forEach(function(link) {
        link.addEventListener('click', function(event) {
          event.preventDefault();
          var targetSectionId = link.getAttribute('href').substring(1);
          showSection(targetSectionId);
        });
      });
    });

    function showSection(sectionId) {
      document.querySelectorAll('section').forEach(function(section) {
        if (section.id === sectionId) {
          section.style.display = 'block';
        } else {
          section.style.display = 'none';
        }
      });
    }

    function showDashboard() {
      showSection('dashboard');
    }
  </script>
</body>
</html>