<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Task3</title>
    </head>
    <body>
        <form method="POST" id="form" >
            <label>
                Имя: <br/>
                <input name="field-name" placeholder="Имя ">
            </label>
            <br/>
            <br/>
            <label>
                Ваш email: <br/>
                <input name="field-email" placeholder="Email">
            </label>
            <br/>
            <br/>
            <label>
                Дата рождения <br/>
                <input name="field-date" value="2012-12-12" type="date">
            </label>
            <br/>
            <br/>
            <label>
                Пол: <br/>
                <label><input type="radio" name="radio1" value="1">Мужской</label>
                <label><input type="radio" name="radio1" value="2">Женский</label>
            </label>
            <br/> <br/>
            <label>
                Количесво конечностей:<br/>
                <label<input type="radio"
                    name="radio2" value="1"/>1</label>
                <label><input type="radio"
                    name="radio2" value="2"/>2</label>
                <label><input type="radio"
                    name="radio2" value="3"/>3</label>
                <label><input type="radio"
                    name="radio2" value="4"/>4</label><br/>
            </label>
            <br/>
            <label>
                Суперспособности:<br/>
                <select name="superpowers[]"
                        multiple="multiple">
                    <option value="1">Бессмертие</option>
                    <option value="2">Прохождение сквозь стены</option>
                    <option value="3">Левитация</option>
                </select>
            </label><br/>
            <br/>
            <label>
                Ваша биография:<br/>
                <textarea name="bio">Пишите здесь</textarea>
            </label>
            <br/>
            <br/>
            <label><input type="checkbox"
                name="check-1" checked=checked value=1 />
                Ознакомлен с контрактом</label><br/><br/>
            <input type="submit" value="Отправить"/>

        </form>
    </body>
</html>
