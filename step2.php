
<?php include 'header.php';?>
<?php include 'function/step2.php';?>

<div class="container bb pt-md-5 pt-2 px-0 mb-2 d-flex flex-column">
    <div class="col-12 p-0 d-flex d-md-none justify-content-end">
        <div class="logo d-md-none d-flex col-5 pr-3 py-0 float-right">
            <img class="w-100" src="/public/img/svg/logo.svg" />
        </div>
    </div>
    <div class="col-12 p-md-0">
        <div class="title float-left">
            <h3 class="p-md-0">Descrição dos produtos</h3>
        </div>
        <div class="logo d-none d-md-flex col-md-1 p-0 float-right">
            <img class="w-100" src="/public/img/svg/logo.svg" />
        </div>
    </div>
</div>
<div class="container p-0">
    <div class="col-12 p-0">
        <form method="post" action="step2.php">
            <div class="col-12 p-0 pb-4 d-flex">
                <div class="col-4 col-md-4 pl-md-0">
                    <label>Descrição</label>
                    <input type="text" class="form-control" placeholder="XXXXXXXXXXXX" name="descricao1" value="">
                </div>
                <div class="col-4 col-md-2">
                    <label>Quantidade</label>
                    <input type="number" placeholder="0000" name="qtd1" id="qtd1" class="form-control" value="">
                </div>
                <div class="col-4 col-md-3">
                    <label>Valor unitário</label>
                    <input type="number" min="0.00" max="10000.00" step="0.01" placeholder="R$1.000,00" class="form-control" name="unitario1" id="unitario1" value="">
                </div>
                <div class="col-4 col-md-3 pr-0">
                    <label>Total</label>
                    <input type="number" disabled min="0.00" max="10000.00" step="0.01" placeholder="R$1.000,00" class="form-control" name="total1" id="total1" value="">
                </div>
            </div>
            <div class="col-12 px-0 pb-4 d-flex">
                <div class="col-4 col-md-4 pl-md-0">
                    <input type="text" class="form-control" placeholder="XXXXXXXXXXXX" name="descricao2" value="">
                </div>
                <div class="col-4 col-md-2">
                    <input type="number" placeholder="0000" name="qtd2" id="qtd2" class="form-control" value="">
                </div>
                <div class="col-4 col-md-3">
                    <input type="number" min="0.00" max="10000.00" step="0.01" placeholder="R$1.000,00" class="form-control" name="unitario2" id="unitario2" value="">
                </div>
                <div class="col-4 col-md-3 pr-0">
                    <input type="number" disabled min="0.00" max="10000.00" placeholder="R$1.000,00" step="0.01" class="form-control" name="total2" id="total2" value="">
                </div>
            </div>
            <div class="col-12 px-0 pb-4 d-flex">
            '   <div class="col-4 col-md-4 pl-md-0">
                    <input type="text" class="form-control" placeholder="XXXXXXXXXXXX" name="descricao3" value="">
                </div>
                <div class="col-4 col-md-2">
                    <input type="number" placeholder="0000" name="qtd3" id="qtd3" class="form-control" value="">
                </div>
                <div class="col-4 col-md-3">
                    <input type="number" min="0.00" max="10000.00" step="0.01" placeholder="R$1.000,00" class="form-control" name="unitario3" id="unitario3" value="">
                </div>
                <div class="col-4 col-md-3 pr-0">
                    <input type="number" disabled min="0.00" max="10000.00" step="0.01" placeholder="R$1.000,00" class="form-control" name="total3" id="total3" value="">
                </div>
            </div>
            <div class="col-12 px-0 py-4 d-flex justify-content-end">
                <div class="col-12 col-md-3 pr-md-0">
                    <input type="text" class="form-control"  placeholder="R$1.000,00" name="totalsoma" id="totalsoma" value="">
                </div>
            </div>
            <div class="col-12 p-md-0 d-flex">
                <h4 class="font-weight-bold">Informações de envio</h4>
            </div>
            <div class="col-12 px-md-0 py-4 d-flex">
                <div class="col-6 col-md-3 pl-0">
                    <label>Frete</label>
                    <input type="text" class="form-control" name="frete" value="">
                </div>
                <div class="col-6 col-md-3 pr-0">
                    <label>Tipo de envio</label>
                    <input type="text" class="form-control" name="envio" value="">
                </div>
            </div>
            <div class="col-12 p-0 d-flex justify-content-center">
                <div class="col-12 col-md-3 px-md-0">
                    <button type="submit" class="form-control btn-colored">Confirmar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container fixed-bottom">
    <div class="col-12 d-flex justify-content-center pb-5">
        <div class="col-md-8 col-12">
            <img src="/public/img/svg/step2.svg"/>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(function () {
        $("#qtd1, #unitario1").keyup(function () {
            $("#total1").val(+$("#qtd1").val() * +$("#unitario1").val());
            $("#totalsoma").val(+$("#total1").val() + +$("#total2").val() + +$("#total3").val());
            $("#total1").mask('#.##0,00', {reverse: true});
        });
        $("#qtd2, #unitario2").keyup(function () {
            $("#total2").val(+$("#qtd2").val() * +$("#unitario2").val());
            $("#totalsoma").val(+$("#total1").val() + +$("#total2").val() + +$("#total3").val());
            $("#total2").mask('#.##0,00', {reverse: true});
        });
        $("#qtd3, #unitario3").keyup(function () {
            $("#total3").val(+$("#qtd3").val() * +$("#unitario3").val());
            $("#totalsoma").val(+$("#total1").val() + +$("#total2").val() + +$("#total3").val());
            $("#total3").mask('#.##0,00', {reverse: true});
        });
    });
</script>
<?php include 'footer.php';?>