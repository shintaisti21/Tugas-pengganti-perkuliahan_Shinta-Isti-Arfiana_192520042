<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
        border-collapse: collapse;
        }

        table td, table th {
        border: 1px solid;
        }

        table th {
        padding-top: 12px;
        padding-bottom: 12px;
        }   
        
</style>
</head>
<body>
    <table>
        <tr>
            <th>Makanan</th>
            <th>Minuman</th>
        </tr>
        <tr>
            <td>1. Nasi & Ikan Nila Bakar </td>
            <td>1. Es Teh </td>
        </tr>
        <tr>
            <td>2. Nasi & Ikan Lele Bakar </td>
            <td>2. Es Jeruk </td>
        </tr>
        <tr>
            <td>3. Nasi & Ayam Goreng </td>
            <td>3. Jeruk Panas </td>
        </tr>
        <tr>
            <td>4. Nasi & Bebek Goreng </td>
            <td>4. Teh Panas</td>
        </tr>
    </table>
        <form action ="/makanan/proses" method="POST">
        @csrf
            <br>
            <label>Makanan</label>
            <br>
            <input type="text" name="mkn">
            <br>
            <label>Minuman</label>
            <br>
            <input type="text" name="mnm">
            <br>
            <input type="Submit" value="pesan">
        </form>
        
</body>
</html>