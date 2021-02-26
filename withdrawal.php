<h1 class="mx-2 py-2 border-bottom">Solicitar retirada</h1>
<article class="container py-5 my-5 mx-5">
<form class="row g-4">
    <div class="col-md-3">
        <label for="valor" class="form-label">Valor que deseja retira</label>
        <div class="input-group mb-3">
            <span class="input-group-text">$</span>
            <input type="text" id="valor" name="values" class="form-control"  aria-label="Amount (to the nearest dollar)">
        </div>
    </div>
    <div class="col-md-6 align-self-center form-check">
        <input class="form-check-input" type="checkbox" checked id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Usar carteira sua no adicionada ao nosso sistema 
        </label>
    </div>
    <!-- Caso ele tenha carteira aqui no sistema -->
    <div class="col-md-12 align-self-center">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
            Bitcoin
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
            Ethereum
            </label>
        </div>
    </div>
    <!-- Caso ele tenha carteira aqui no sistema -->
    <div class="col-md-6">
        <label for="namewallet" class="form-label">Nome</label>
        <input type="text" name="name" class="form-control" id="namewallet" placeholder="Nome da Carteira">
    </div>
    <div class="col-md-6">
        <label for="url" class="form-label">URL</label>
        <input type="text"name="url" class="form-control" id="url" placeholder="Endereço da carteira">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Envia Pedido</button>
    </div>
</form>
</article>