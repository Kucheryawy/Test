<?php
// $result = require('result.php');
$mark = 0;
// global $mark;
if (isset($_GET['question_1'])) {      
    if ($_GET['question_1'] == "c") {  
        $mark++;                      
    } 
}

if (isset($_GET['question_2'])) {      
    if ($_GET['question_2'] == "c") {  
        $mark++;                      
    } 
}

if (isset($_GET['question_3'])) {      
    if ($_GET['question_3'] == "c") {  
        $mark++;                      
    } 
}

if (isset($_GET['question_4'])) {      
    if ($_GET['question_4'] == "a") {  
        $mark++;                      
    } 
}

if (isset($_GET['question_5'])) {      
    if ($_GET['question_5'] == "a") {  
        $mark++;                      
    } 
}

if (isset($_GET['question_6'])) {      
    if ($_GET['question_6'] == "c") {  
        $mark++;                      
    } 
}

if (isset($_GET['question_7'])) {      
    if ($_GET['question_7'] == "T") {  
        $mark++;                      
    } 
}

if (isset($_GET['question_8'])) {      
    if ($_GET['question_8'] == "A") {  
        $mark++;                      
    } 
}

if (isset($_GET['question_9[]'])) {      
    if ($_GET['question_9[]'] == "a") {  
        $mark++;                      
    } 
}

if (isset($_GET['question_10[]'])) {      
    if ($_GET['question_10[]'] == "b") {  
        $mark++;                      
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="">
                    <h3>1. Что такое колебательное движение?</h3>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_1" value="a" id="question_1a" required>
                        <label class="form-check-label" for="question_1a">
                            А) Движение тела с постоянной скоростью.
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_1" value="b" id="question_1b" required>
                        <label class="form-check-label" for="question_1b">
                            B) Движение тела в одном направлении.
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_1" value="c" id="question_1c" required>
                        <label class="form-check-label" for="question_1c">
                            С) Движение тела туда и обратно вокруг точки равновесия.
                        </label>
                    </div>

                    <h3>2. Что такое точка равновесия?</h3>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_2" value="a" id="question_2a" required>
                        <label class="form-check-label" for="question_2a">
                            А) Место, где тело останавливается.
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_2" value="b" id="question_2b" required>
                        <label class="form-check-label" for="question_2b">
                            Б) обозначается
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_2" value="c" id="question_2c" required>
                        <label class="form-check-label" for="question_2c">
                            С) Место, где нет сил, вызывающих движение.
                        </label>
                    </div>

                    <h3>3. Как называется период колебаний?</h3>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_3" value="a" id="question_3a" required>
                        <label class="form-check-label" for="question_3a">
                            А) Время, за которое тело проходит расстояние, равное длине колебания.
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_3" value="b" id="question_3b" required>
                        <label class="form-check-label" for="question_3b">
                            Б)  Время, за которое тело проходит расстояние, равное амплитуде колебания.
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_3" value="c" id="question_3c" required>
                        <label class="form-check-label" for="question_3c">
                            С) Время, за которое тело совершает одно полное колебание.
                        </label>
                    </div>

                    <h3>4. Что такое амплитуда колебания?</h3>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_4" value="a" id="question_4a" required>
                        <label class="form-check-label" for="question_4a">
                            А) Максимальное расстояние, на которое тело отклоняется от точки равновесия.
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_4" value="b" id="question_4b" required>
                        <label class="form-check-label" for="question_4b">
                            Б) Минимальное расстояние, на которое тело отклоняется от точки равновесия.
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_4" value="c" id="question_4c" required>
                        <label class="form-check-label" for="question_4c">
                            С) Расстояние, которое тело проходит за один период колебаний.
                        </label>
                    </div>

                    <h3>5. Что такое частота колебаний?</h3>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_5" value="a" id="question_5a" required>
                        <label class="form-check-label" for="question_5a">
                            А) Количество колебаний, совершаемых телом за единицу времени.
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_5" value="b" id="question_5b" required>
                        <label class="form-check-label" for="question_5b">
                            Б) Расстояние, которое тело проходит за одно колебание.
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_5" value="c" id="question_5c" required>
                        <label class="form-check-label" for="question_5c">
                            С) Время, за которое тело совершает одно полное колебание.
                        </label>
                    </div>

                    <h3>6. Какая сила возвращает тело к точке равновесия при колебаниях?</h3>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_6" value="a" id="question_6a" required>
                        <label class="form-check-label" for="question_6a">
                            А) Сила трения.
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_6" value="b" id="question_6b" required>
                        <label class="form-check-label" for="question_6b">
                            Б) Сила тяжести.
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_6" value="c" id="question_6c" required>
                        <label class="form-check-label" for="question_6c">
                            С) Сила упругости.
                        </label>
                    </div>

                        <h3>7. Какой буквой обозначается период колебаний?</h3>
                    <div class="mb-3">
                            <label for="result" class="form-label">Введите ответ:</label>
                            <textarea class="form-control" id="question_7"  name="question_7" value=<?php (isset($_GET['question_7'])) ?> required></textarea>
                    </div>

                        <h3>8. Какой буквой обозначается амплитуда колебаний?</h3>
                    <div class="mb-3">
                            <label for="result" class="form-label">Введите ответ:</label>
                            <textarea class="form-control" id="question_8"  name="question_8" value=<?php (isset($_GET['question_8'])) ?> required></textarea>
                    </div>

                    <h3>9. Какие утверждения верны для закона сохранения импульса в замкнутой системе?</h3>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="question_9" value="a" id="question_9a">
                        <label class="form-check-label" for="question_9a">
                            А) Сумма импульсов всех тел в системе равна нулю.
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="question_9" value="b" id="question_9b">
                        <label class="form-check-label" for="question_9b">
                            Б) Изменение импульса одного тела равно изменению импульса другого тела в системе.
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="question_9" value="c" id="question_9c">
                        <label class="form-check-label" for="question_9c">
                            С)  Импульс системы сохраняется только в случае отсутствия внешних сил.
                        </label>
                    </div>

                    <h3>10. Какие утверждения верны для закона сохранения энергии в замкнутой системе?</h3>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="question_10" value="a" id="question_10a">
                        <label class="form-check-label" for="question_10a">
                            А) В замкнутой системе энергия может превратиться в массу.
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="question_10" value="b" id="question_10b">
                        <label class="form-check-label" for="question_10b">
                            Б) Сумма кинетической и потенциальной энергии в замкнутой системе сохраняется.
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="question_10" value="c" id="question_10c">
                        <label class="form-check-label" for="question_10c">
                            С)  Закон сохранения энергии не выполняется в системах, где есть трение.
                        </label>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Result</button>
                    </div>
                    <?php if (isset($mark)) : ?>
                        <div class="mb-3">
                            <label for="result" class="form-label">Result</label>
                            <textarea class="form-control" id="mark">
                            <?= $mark ?>/10
                            </textarea>
                        </div>
                        <?php endif; ?>
                        <?php
                        //           elseif ($mark) <= 2 { 
                        //            echo $mark == 1
                        //         } elseif ($mark) = 3 or = 4 { 
                        //             echo $mark == 2
                        //         } elseif ($mark) = 5 or = 6 { 
                        //             echo $mark == 3
                        //         } elseif ($mark) = 7 or = 8 { 
                        //             echo $mark == 4
                        //         }  elseif ($mark) = 9 or= 10 { 
                        //             echo $mark == 5
                        //         } break;
                        // 
                        ?>
                    <!-- <div class="mb-3">
                        <a href="result.php" type="button" class="btn btn-primary"> Result</a>
                    </div> -->
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>