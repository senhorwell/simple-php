
<?php include 'header.php';?>
<?php include 'function/step3.php';?>

<div class="container bb pt-md-5 pt-2 px-0 mb-2 d-flex flex-column">
    <div class="col-12 p-0 d-flex d-md-none justify-content-end">
        <div class="logo d-md-none d-flex col-6 col-md-5 pr-3 py-0 float-right">
            <img class="w-100" src="/public/img/svg/logo.svg" />
        </div>
    </div>
    <div class="col-12 p-md-0">
        <div class="title float-left">
            <h3 class="p-md-0">Informações importantes</h3>
        </div>
        <div class="logo d-none d-md-flex col-md-1 p-0 float-right">
            <img class="w-100" src="/public/img/svg/logo.svg" />
        </div>
    </div>
</div>
<div class="container p-0">
    <div class="col-12 p-0">
        <form method="post" action="step3.php">
            <div class="col-12 px-0 py-2 d-flex justify-content-between">
                <div class="col-6 col-md-5 pl-md-0">
                    <label>Franquias de dados por linha</label>
                    <input type="number" class="form-control" placeholder="Mb" name="franquia" value="">
                    <p class="subtitulo">Ao exceder a franquia de dados será cobrado R$0,50 por mega excedente</p>
                </div>
                <div class="col-6 col-md-5 pr-md-0">
                    <label>Taxa de ativação</label>
                    <input type="number" class="form-control" placeholder="Dias" name="taxaativacao" value="">
                    <p class="subtitulo">Insento</p>
                </div>
            </div>
            <div class="col-12 px-0 py-2 d-flex justify-content-between">
                <div class="col-6 col-md-5 pl-md-0">
                    <label>Prazo de ativação das linhas</label>
                    <input type="number" class="form-control" placeholder="Dias" name="prazoativacao" value="">
                    <p class="subtitulo">Ao fim do prazo será cobrado R$2,00 por linha desativada a cada 30 dias, até a data da sua ativação</p>
                </div>
                <div class="col-6 col-md-5 pr-md-0">
                    <label>Taxa de cancelamento</label>
                    <input type="number" class="form-control" placeholder="Dias" name="cancelamento" value="">
                    <p class="subtitulo">Linhas canceladas antes de 12 meses será cobrado apenas o plástico no valor de R$15,00 por sim card</p>
                </div>
            </div>
            <div class="col-12 px-0 py-2 d-flex justify-content-between">
                <div class="col-6 col-md-5 pl-md-0">
                    <label>Substituição de linhas</label>
                    <input type="text" class="form-control" name="substituicao" value="">
                    <p class="subtitulo">Insento</p>
                </div>
                <div class="col-6 col-md-5 pr-md-0">
                    <label>Valor por SMS</label>
                    <input type="number" class="form-control" placeholder="Dias" name="valorsms" value="">
                    <p class="subtitulo">Mediante solicitação formal do cliente</p>
                </div>
            </div>
            <div class="col-12 px-0 pt-5 pb-5 mb-5 d-flex justify-content-center">
                <div class="col-md-3 col-12 pb-5 px-md-0">
                    <button type="submit" class="form-control btn-colored">Confirmar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container fixed-bottom">
    <div class="col-12 d-flex justify-content-center pb-5">
        <div class="col-md-8 col-12">
            <img src="/public/img/svg/step3.svg"/>
        </div>
    </div>
</div>
<?php include 'footer.php';?>