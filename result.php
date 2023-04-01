<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
<?php if (isset($mark)) : ?>
    <div class="mb-3">
        <label for="result" class="form-label">Result</label>
        <textarea class="form-control" id="mark"><?= $mark ?>/10</textarea>
    </div>
<?php endif; ?>
</body>
</html>

