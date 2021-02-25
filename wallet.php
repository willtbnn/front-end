<h1 class="mx-2 py-2 border-bottom">Suas carteiras</h1>
<article class="container-fluid my-5 py-5">
<section class="row justify-content-evenly">
    <div class="col-6 col-md-3">
        <div class="card border-white">
            <div class="card-body">
                <h5 class="card-title">Bitcoin</h5>
                <p class="card-text">http://09u09wiejqwoieuwqeijw.comwqpoiewqioeuwqeweuwqeiqwuewoqi</p>
                <div class="px-5">
                    <a href="#" class="btn btn-warning mx-2">editar</a>
                    <a href="#" class="btn btn-danger mx-2">excluir</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card border-white">
            <div class="card-body">
                <h5 class="card-title">Ethereum</h5>
                <p class="card-text">http://09u09wiejqwoieuwqeijw.comwqpoiewqioeuwqeweuwqeiqwuewoqi</p>
                <div class="px-5">
                    <a href="#" class="btn btn-warning mx-2">editar</a>
                    <a href="#" class="btn btn-danger mx-2">excluir</a>
                </div>
            </div>
        </div>
    </div>
</section>
<a href="#" class="btn btn-primary mx-5" data-bs-toggle="modal" data-bs-target="#exampleModal"> Adicionar 
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#e6be31" class="bi bi-wallet" viewBox="0 0 16 16">
    <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
    </svg>
</a>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar carteira</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome da carteira</label>
                    <input type="text" class="form-control" id="name" placeholder="nome queira para identifica essa carteira">
                    <div id="nameHelp" class="form-text">pode ser o nome que você quiser*</div>
                </div>
                <div class="mb-3">
                    <label for="url" class="form-label">URL da carteira</label>
                    <input type="url" class="form-control" id="url" placeholder="endereço url da sua carteira">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fecha</button>
                <button type="submit" class="btn btn-primary">Salva</button>
            </div>
            </form>
        </div>
    </div>
</div>
</article>