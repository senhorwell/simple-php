
<?php include 'headerstep6.php';?>
<?php include 'function/login.php';?>


<div class="container bb pt-md-5 pt-2 px-0 mb-2 d-flex flex-column">
    <div class="col-12 p-0 d-flex d-md-none justify-content-end">
        <div class="logo d-md-none d-flex col-6 col-md-5 pr-3 py-0 float-right">
            <img class="w-100" src="/public/img/image/logo-white.png" />
        </div>
    </div>
    <div class="col-12 p-md-0">
        <div class="title float-left">
            <h3 class="p-md-0">Pedido finalizado</h3>
        </div>
        <div class="logo d-none d-md-flex col-md-1 p-0 float-right">
            <img class="w-100" src="/public/img/image/logo-white.png" />
        </div>
    </div>
</div>

<div class="container">
    <div class="col-12">
        <form class="pt-5" method="post" action="step6.php">
            <div class="col-12 px-0 py-5 d-flex justify-content-center">
                <div class="col-md-1 col-7 pl-0">
                    <img class="w-100" src="/public/img/svg/truck.svg"/>
                </div>
            </div>
            <div class="col-12 px-0 py-4 d-flex justify-content-center">
                <div class="col-md-5 col-12 pl-0 text-center">
                    <h4>Email enviado para o cliente.</h4>
                </div>
            </div>
            <div class="col-12 px-0 py-4 d-flex justify-content-center">
                <div class="col-md-5 col-12 pl-0 text-center">
                    <p>Obrigado por trabalhar conosco e parabens pela venda!</p>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container fixed-bottom">
    <div class="col-12 d-flex justify-content-center pb-5">
        <div class="col-md-8 col-12">
            <img src="/public/img/svg/step6.svg"/>
        </div>
    </div>
</div>
<?php include 'footer.php';?>