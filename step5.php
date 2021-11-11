
<?php include 'header.php';?>
<?php include 'function/step5.php';?>


<div class="container bb pt-md-5 pt-2 px-0 mb-2 d-flex flex-column">
    <div class="col-12 p-0 d-flex d-md-none justify-content-end">
        <div class="logo d-md-none d-flex col-6 col-md-5 pr-3 py-0 float-right">
            <img class="w-100" src="/public/img/svg/logo.svg" />
        </div>
    </div>
    <div class="col-12 p-md-0">
        <div class="title float-left">
            <h3 class="p-md-0">Confirmar pedido </h3>
        </div>
        <div class="logo d-none d-md-flex col-md-1 p-0 float-right">
            <img class="w-100" src="/public/img/svg/logo.svg" />
        </div>
    </div>
</div>
<div class="container">
    <div class="col-12 p-0">
        <form class="pt-5" method="post" action="step5.php">
            <div class="col-12 px-0 py-5 d-flex justify-content-center">
                <div class="col-md-1 col-4 pl-0">
                    <img class="w-100" src="/public/img/svg/check.svg"/>
                </div>
            </div>
            <div class="col-12 px-0 py-4 d-flex justify-content-center">
                <div class="col-12 px-0 text-center">
                    <p>Declaro para todos os efeitos da lei, estar de acordo com as condições comerciais expressas no presente pedido de compra, bem como, estar ciente que o presente pedido de compra é parte integrante e indissociável do contrato de locação de serviço de comunicação de linha M2M - SIM card, digitalizado sob número 381322 e registrado sob número 2878185 junto ao primeiro oficio de titulos e documentos da comarca de Londrina/PR, também disponivel no endereço eletrônco www.simplepm.com.br/contratos cujos termos e condições declaro conhecer e aceitar.</p>
                </div>
            </div>
            <div class="col-12 px-0 py-4 d-flex justify-content-center">
                <div class="col-md-4 col-12 pl-0 d-flex align-items-center justify-content-center">
                    <input type="checkbox" id="confirmo" name="confirmo"/>
                    <p class="px-3 m-0">Eu estou de acordo.</p>
                </div>
            </div>
            <div class="col-12 px-0 pt-4 pb-5 mb-5 d-flex justify-content-center">
                <div class="col-md-3 col-12 px-0 pb-5">
                    <button type="submit" id="submit" disabled class="form-control btn-colored">Confirmar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container fixed-bottom">
    <div class="col-12 d-flex justify-content-center pb-5">
        <div class="col-8">
            <img src="/public/img/svg/step5.svg"/>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(function () {
        $("#confirmo").click(function () {
            if($('#confirmo').is(':checked')) { 
                $('#submit').prop("disabled", false);
            }else{
                $('#submit').prop("disabled", true);
            }
        });
    });
</script>
<?php include 'footer.php';?>