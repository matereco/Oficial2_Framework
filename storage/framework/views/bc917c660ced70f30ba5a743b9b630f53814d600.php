<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Congresso</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>

    <?php echo $__env->make('layout.partial.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">

                <?php echo $__env->yieldContent('main'); ?>

            </div>
        </div>
    </div>

    <div class="position-absolute top-100 start-50 translate-middle"><h3><i  class="bi bi-cup-hot-fill"> --Matheus Avelar--</i><i  class="bi bi-cup-hot-fill"></i></h3></div>
</body>
</html>

<?php /**PATH C:\dev\Atv_OF2\Atv_OF2\congresso_TI\resources\views/layout/template.blade.php ENDPATH**/ ?>