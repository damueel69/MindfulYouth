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

        <label for="konten">Konten</label>
        <textarea name="konten"></textarea><br>

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

        <input type="submit" value="Submit">
    </form>
</body>
</html>
