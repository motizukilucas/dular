@include('header')

        <div class="container mt-3">
            <form id="buscaForm" class="form-inline">
                @csrf
                <input class="form-control mr-sm-2 col-md-4" name="query" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
        <script type="text/javascript" src="js/buscaOrdem.js"></script>
    </body>
</html>