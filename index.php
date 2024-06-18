<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Bad words</title>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-5 mx-auto">
                <form action="censure.php" method="GET">
                    <h1 class="mb-4">PHP BADWORDS</h1>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Inserisci testo</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Parola da censurare</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="censura">
                    </div>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>