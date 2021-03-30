<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab3 - Mikerin</title>

    <link rel="stylesheet" href="style.css">
</head>
<body class="page">
    <div class="page__container">
        <h1 class="page__header">
            Расчет медиан произвольного треугольника
        </h1>

        <div class="page__content content">
            <div class="content__left">
                <h2 class="content__header">
                    Входные данные
                </h2>
                <form class="form">
                    <fieldset class="form__fieldset">
                        <legend class="form__legend">
                            Точка A
                        </legend>
                        <input type="number" name="ax" placeholder="Координата X точки A" required>
                        <input type="number" name="ay" placeholder="Координата Y точки A" required>
                    </fieldset>
                    <fieldset class="form__fieldset">
                        <legend class="form__legend">
                            Точка B
                        </legend>
                        <input type="number" name="bx" placeholder="Координата X точки B" required>
                        <input type="number" name="by" placeholder="Координата Y точки B" required>
                    </fieldset>
                    <fieldset class="form__fieldset">
                        <legend class="form__legend">
                            Точка C
                        </legend>
                        <input type="number" name="cx" placeholder="Координата X точки C" required>
                        <input type="number" name="cy" placeholder="Координата Y точки C" required>
                    </fieldset>
                </form>
            </div>
            <div class="content__right">
                <h2 class="content__header">
                    Результат вычислений
                </h2>
                <div class="content__result">
                    Медиана из точки A: <span>48</span>
                </div>
                <div class="content__result">
                    Медиана из точки B: <span>48</span>
                </div>
                <div class="content__result">
                    Медиана из точки C: <span>48</span>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>