<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hewan Menginap</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .form-container {
            width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form-container h2 {
            text-align: center;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .days-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .days-group button {
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .days-group button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .submit-button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Form Hewan Menginap</h2>
        <form id="pet-form">
            <div class="input-group">
                <label for="pet-name">Nama Hewan</label>
                <input type="text" id="pet-name" name="pet-name" required>
            </div>
            <div class="input-group">
                <label for="pet-type">Jenis Hewan</label>
                <select id="pet-type" name="pet-type" required>
                    <option value="anjing">Anjing</option>
                    <option value="kucing">Kucing</option>
                </select>
            </div>
            <div class="input-group">
                <label for="pet-type">Gender Hewan</label>
                <select id="pet-type" name="pet-type" required>
                    <option value="anjing">Jantan</option>
                    <option value="kucing">Betina</option>
                </select>
            </div>
            <div class="input-group">
                <label for="breed">Jenis Ras</label>
                <input type="text" id="breed" name="breed" required>
            </div>
            <div class="input-group">
                <label for="size">Ukuran</label>
                <select id="size" name="size" required>
                    <option value="kecil">Kecil</option>
                    <option value="sedang">Sedang</option>
                    <option value="besar">Besar</option>
                </select>
            </div>
            <div class="input-group">
                <label for="color">Warna</label>
                <input type="text" id="color" name="color" required>
            </div>

            <button type="submit" class="submit-button">Kirim</button>
        </form>
    </div>
</body>
</html>
