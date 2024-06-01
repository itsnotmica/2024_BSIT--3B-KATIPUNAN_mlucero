<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop Order Tracking</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Order Tracking</h1>

<table>
    <thead>
        <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Items</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody id="orderTableBody">
        <!-- Orders will be dynamically added here -->
    </tbody>
</table>

<script>
    // Sample orders data (you can replace this with actual data from your backend)
    var orders = [
        { id: "2", customer: "Micah Listanco", items: "Espresso", status: "Preparing" },
        { id: "3", customer: "Rizza Cayab", items: "Cappuccino", status: "Ready for Pickup" }
    ];

    // Function to populate orders in the table
    function populateOrders() {
        var tableBody = document.getElementById("orderTableBody");
        tableBody.innerHTML = "";

        orders.forEach(function(order) {
            var row = "<tr>";
            row += "<td>" + order.id + "</td>";
            row += "<td>" + order.customer + "</td>";
            row += "<td>" + order.items + "</td>";
            row += "<td>" + order.status + "</td>";
            row += "</tr>";
            tableBody.innerHTML += row;
        });
    }

    // Call the function to populate orders when the page loads
    window.onload = populateOrders;
</script>

</body>
</html>