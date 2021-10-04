<h3>Termék hozzáadása</h3>

<!--<form action="" method="POST" accept-charset="UTF-8">
    <label for="tnev">Terméknév:</label>
    <input type="text" name="termeknev" required="required" id="tnev" minlength="2" maxlength="30"/><br/>
    
    <label for="kat">Kategória:</label>
    <input type="text" name="kategoria" required="required" id="kat" minlength="2" maxlength="30"/><br/>
    
        <label for="menny">Mennyiség:</label>
    <input type="text" name="mennyiseg" required="required" id="menny" minlength="2" maxlength="30"/><br/>
    
    <label for="menny_egy">Mennyiségi egység:</label>
    <input type="text" name="mennyisegi_egyseg" required="required" id="menny_egy" maxlength="30"/><br/>
    
    <label for ="ar">Ár:</label>
    <input type="password" name="ara" required="required" id="ar" minlength="8"><br/>
    
    <button type="submit" name="submithozzaad" value="1">Hozzáad</button>
</form>-->
    <table>
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
                        <button type="submit" name="submithozzaad" value="1">Hozzáadás</button>
                    </td>
                </form>
            </tr>
        </tbody>
    </table>