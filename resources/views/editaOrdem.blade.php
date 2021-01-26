        @include('header')
        <?php dump($aparelho)?>

        <div class="container">
            <h1>
                Ordem de serviço <span class="badge badge-secondary"><?php echo $ordem_servico[0]->id ?></span>
            </h1>
            <form id="edita-form" class="needs-validation" novalidate>
                @csrf
                
                <!-- cliente form -->
                <input type="hidden" name="id_cliente" value="<?php echo $cliente['0']->id ?>">

                <!-- aparelho form -->
                <hr>
                <input type="hidden" name="id_aparelho" value="<?php echo $aparelho['0']->id ?>">
                <input type="hidden" name="id_aparelho2" value="<?php echo $aparelho['1']->id ?>">

                <!-- ordem servico aparelho form -->
                <input type="hidden" name="id_os_aparelho" value="<?php echo $os_aparelho[0]->id ?>">

                <!-- ordem servico peca form -->
                <input type="hidden" name="id_os_peca" value="<?php if (isset($os_pecas[0]->id)) echo $os_pecas[0]->id ?>">

                <!-- ordem servico tecnico form -->
                <input type="hidden" name="id_tecnico" value="<?php if (isset($os_tecnico[0])) echo $os_tecnico[0]->id_tecnico ?>">
                <input type="hidden" name="id_os_tecnico" value="<?php if (isset($os_tecnico[0])) echo $os_tecnico[0]->id ?>">

                <!-- ordem servico form -->
                <input type="hidden" name="id_ordem_servico" value="<?php echo $ordem_servico[0]->id ?>">
                <input type="hidden" name="id_atendente" value="<?php echo $ordem_servico[0]->id_atendente ?>">

                <button class="btn btn-primary" type="submit">Atualiza ordem</button>
            </form>

            <div class="action">
                <div class="btn-wpp btn-wrapper" style="margin-left: 0px;">
                    <img class="btn-action" src="img/whatsapp-brands.svg">
                    Whatsapp
                </div>

                <form id="form-email" action="envia-email">
                    <input name="ordem_servico" value="<?php echo $ordem_servico[0]->id ?>" type="hidden" class="form-control">
                    <div class="btn-mail btn-wrapper">
                        <img class="btn-action" src="img/envelope-solid.svg">
                        Email
                    </div>
                </form>

                <div class="btn-print btn-wrapper">
                    <img class="btn-action" src="img/print-solid.svg">
                    Imprimir
                </div>
            </div>
        </div>

        <script>
            $('.btn-mail').on('click', function() {
                $('#form-email').submit();
            });
        </script>
        
        <script type="text/javascript" src="js/carregaEditForms.js"></script>
        <script type="text/javascript" src="js/coletaDadosForm.js"></script>
        <script type="text/javascript" src="js/atualiza.js"></script>
        <script type="text/javascript" src="js/editaOrdem.js"></script>
    </body>
</html>