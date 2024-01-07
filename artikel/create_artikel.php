<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            height: 40px; /* Sesuaikan tinggi sesuai kebutuhan */
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        textarea {
            resize: vertical;
        }
    </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Artikel</title>
</head>
<body>
    <h1>Create Artikel</h1>
    <?php echo validation_errors(); ?>

    <?php echo form_open('artikel/create'); ?>
        <label for="judul">Judul</label>
        <input type="text" name="judul"><br>

        

        <label for="kategori">Kategori</label>
        <select name="kategori">
            <option value="Stress">Stress</option>
            <option value="Kecemasan">Kecemasan</option>
            <option value="Depresi">Depresi</option>
            <option value="Kecemasan">Kecemasan</option>
            <option value="Gangguan Kepribadian">Gangguan Kepribadian</option>
            <option value="Gangguan Tidur">Gangguan Tidur</option>
            <option value="Rumah Tangga">Rumah Tangga</option>

        </select><br>
        <label for="konten">Konten</label>
        <textarea name="konten"></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
