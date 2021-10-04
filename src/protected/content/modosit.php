</br>

<html>
    <head>
        <meta charset="utf-8">
        <title>Módosítás</title>
        
    </head>
    <body style="background-color: blue">
            <table style="color: white">
        <thead>
            <tr>
                <th>Terméknév</th>
                <th>Kategória</th>
                <th>Mennyiség</th>
		<th>Mennyiségi egység</th>
		<th>Ár</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <form action="" method="POST" accept-charset="UTF-8">
                    <td>
                        <input type="text" name="termeknev" required="required" minlength="2" maxlength="30"/><br/>
                    </td>
                    <td>
                        <input type="text" name="kategoria" required="required" minlength="2" maxlength="30"/><br/>
                    </td>
                    <td>
                        <input type="text" name="mennyiseg" required="required" minlength="2" maxlength="30"/><br/>
                    </td>
                    <td>
                        <input type="text" name="mennyisegi_egyseg" required="required" maxlength="30"/><br/>
                    </td>
                    <td>
                        <input type="text" name="ara" required="required" minlength="2"><br/>
                    </td>
                    <td>
                        <button type="submit" name="submitmodosit" value="1">Hozzáadás</button>
                    </td>
                </form>
            </tr>
        </tbody>
    </table>
    </body>
</html>
