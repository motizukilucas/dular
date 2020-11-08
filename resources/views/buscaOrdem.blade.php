@include('header')

        <div class="container mt-3">
            <form id="buscaForm" class="form-inline">
                @csrf
                <input class="form-control mr-sm-2 col-md-4" name="query" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        
            <table class="table table-hover mt-3">
                <thead>
                    <tr>
                        <th scope="col">Ordem de Serviço</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Equipamento</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Número de série</th>
                    </tr>
                </thead>
                <tbody id="resultado">
                </tbody>
            </table>
        </div>

        <form id="generateEditForm" method="POST" action="/api/gera-editar" style="display: none;">
            @csrf
            <input id="generateEditInput" type="number" name="id">
        </form>

        <script type="text/javascript" src="js/buscaOrdem.js"></script>
    </body>
</html>