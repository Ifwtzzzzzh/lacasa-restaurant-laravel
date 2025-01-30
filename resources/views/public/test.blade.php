<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Menu Button with PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .menu-container {
            margin-top: 20px;
        }
        .icon-wrapper {
            display: flex;
            align-items: center;
            padding: 10px;
            margin: 5px 0;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .icon-wrapper ion-icon {
            font-size: 24px;
            margin-right: 10px;
        }
        .input-field {
            flex: 1;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .btn .text {
            position: absolute;
            transition: transform 0.3s ease;
        }
        .btn .text-1 {
            transform: translateY(0);
        }
        .btn .text-2 {
            transform: translateY(100%);
        }
        .btn:hover .text-1 {
            transform: translateY(-100%);
        }
        .btn:hover .text-2 {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <h1>Add Menu Example</h1>
    <a class="btn btn-menu" id="btn-menu">
        <span class="text text-1">Add Menu</span>
        <span class="text text-2" aria-hidden="true">Add Menu</span>
    </a>

    <div class="menu-container" id="menu-container">
        <!-- Dynamic menu items will appear here -->
    </div>

    <script>
        document.getElementById('btn-menu').addEventListener('click', function() {
            const menuContainer = document.getElementById('menu-container');

            // Create a new div
            const newDiv = document.createElement('div');
            newDiv.className = 'icon-wrapper';

            // Add content to the new div
            newDiv.innerHTML = `
                <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>
                <input type="number" name="number" placeholder="Quantity" autocomplete="off" class="input-field">
            `;

            // Append the new div to the menu container
            menuContainer.appendChild(newDiv);
        });
    </script>

    <!-- Ionicons Library -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
