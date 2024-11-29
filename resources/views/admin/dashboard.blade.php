<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            background-color: #f8f9fa;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #ffffff;
            border-right: 1px solid #ddd;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
        }

        .sidebar h3 {
            font-size: 14px;
            text-transform: uppercase;
            color: #6c757d;
            padding: 15px;
            margin: 0;
            border-bottom: 1px solid #ddd;
        }

        .menu-item {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .menu-item > li {
            padding: 12px 20px;
            cursor: pointer;
            font-size: 14px;
            display: flex;
            align-items: center;
            color: #495057;
            transition: all 0.3s ease;
        }

        .menu-item > li:hover,
        .menu-item > li.active {
            background-color: #e9ecef;
            color: #007bff;
        }

        .menu-item > li i {
            margin-right: 10px;
            font-size: 16px;
        }

        .dropdown-menu {
            display: none;
            list-style: none;
            padding-left: 20px;
            margin: 0;
        }

        .menu-item > li.open .dropdown-menu {
            display: block;
        }

        .dropdown-menu > li {
            padding: 10px 20px;
            font-size: 14px;
            color: #495057;
            cursor: pointer;
        }

        .dropdown-menu > li:hover {
            background-color: #e9ecef;
        }

        /* Footer (Profile Info) */
        .sidebar-footer {
            margin-top: auto;
            padding: 20px;
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar-footer img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .sidebar-footer .user-info {
            display: flex;
            flex-direction: column;
        }

        .sidebar-footer .user-info span {
            font-size: 14px;
            color: #495057;
        }

        .sidebar-footer .user-info small {
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h3>Master</h3>
        <ul class="menu-item">
            <li class="dropdown" onclick="toggleDropdown(this)">
                <i>📂</i> Data Master
                <ul class="dropdown-menu">
                    <li>Vendor</li>
                    <li>Satuan</li>
                    <li>Role User</li>
                    <li>User</li>
                    <li>Barang</li>
                    <li>Margin Penjualan</li>
                </ul>
            </li>
        </ul>
        <h3>Transaksi</h3>
        <ul class="menu-item">
            <li><i>🛒</i> Pengadaan</li>
        </ul>
        <div class="sidebar-footer">
            <img src="https://via.placeholder.com/40" alt="User">
            <div class="user-info">
                <span>Helmi</span>
                <small>Admin</small>
            </div>
        </div>
    </div>

    <script>
        // Toggle Dropdown
        function toggleDropdown(element) {
            const isOpen = element.classList.contains('open');
            document.querySelectorAll('.menu-item > li').forEach(li => li.classList.remove('open'));
            if (!isOpen) {
                element.classList.add('open');
            }
        }
    </script>
</body>
</html>
