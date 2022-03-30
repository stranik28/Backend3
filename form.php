<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Task2</title>
    </head>
    <body>
        <form action="POST" name=""Form >
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
                <input name="field-date" placeholder="Дата рождения">
            </label>
            <br/>
            <br/>
            <label>
                Пол: <br/>
                <label><input type="radio" name="radio1" value="Мужской">Мужской</label>
                <label><input type="radio" name="radio1" value="Женский">Женский</label>
            </label>
            <br/> <br/>
            <label>
                Количесво конечностей:<br/>
                <label<input type="radio"
                    name="radio2" value="one"/>1</label>
                <label><input type="radio"
                    name="radio2" value="two"/>2</label>
                <label><input type="radio"
                    name="radio2" value="three"/>3</label>
                <label><input type="radio"
                    name="radio2" value="four"/>4</label><br/>
            </label>
            <br/>
            <label>
                Суперспособности:<br/>
                <select name="superpowers"
                        multiple="multiple">
                    <option value="val1">Бессмертие</option>
                    <option value="val2">Прохождение сквозь стены</option>
                    <option value="val3">Левитация</option>
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
                name="check-1" />
                Ознакомлен с контрактом</label><br/><br/>
            <input type="submit" value="Отправить"/>

        </form>
    </body>
</html>
