
<?php include 'header.php';?>
<?php include 'function/step4.php';?>

<div class="container bb pt-md-5 pt-2 px-0 mb-2 d-flex flex-column">
    <div class="col-12 p-0 d-flex d-md-none justify-content-end">
        <div class="logo d-md-none d-flex col-6 col-md-5 pr-3 py-0 float-right">
            <img class="w-100" src="/public/img/svg/logo.svg" />
        </div>
    </div>
    <div class="col-12 p-md-0">
        <div class="title float-left">
            <h3 class="p-md-0">Observações</h3>
        </div>
        <div class="logo d-none d-md-flex col-md-1 p-0 float-right">
            <img class="w-100" src="/public/img/svg/logo.svg" />
        </div>
    </div>
</div>
<div class="container">
    <div class="col-12 p-0">
        <form method="post" action="step4.php">
            <div class="col-12 px-0 py-4 d-flex justify-content-center">
                <div class="col-md-7 col-12 p-0">
                    <label>Digite aqui suas observações</label>
                    <textarea rows="5" placeholder="Digite aqui" class="form-control" name="obs" value=""></textarea>
                    <p>Caso não haja observações apenas confirme e avance para a próxima etapa.</p>
                </div>
            </div>
            <div class="col-12 px-0 pt-5 d-flex justify-content-center">
                <div class="col-md-3 col-12 px-0">
                    <button type="submit" class="form-control btn-colored">Confirmar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container fixed-bottom">
    <div class="col-12 d-flex justify-content-center pb-5">
        <div class="col-md-8 col-12">
            <img src="/public/img/svg/step4.svg"/>
        </div>
    </div>
</div>
<?php include 'footer.php';?>