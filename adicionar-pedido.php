<?php include 'header.php'; ?>
<?php include 'conectar.php'; ?>
<?php 
    $sabores = isset($_POST['sabor']) ? $_POST['sabor'] : '';
    $adicionais = isset($_POST['adicional']) ? $_POST['adicional'] : '';
    $bebidas = isset($_POST['bebida']) ? $_POST['bebida'] : '';
    $total = isset($_POST['total']) ? $_POST['total'] : '';

    $contarPizzas = 1;
?>
<section>
    <div class="container">
        <h2>Confirme seu pedido</h2>
        <div class="row">
            
            <div class="col-12">
                    <form action="./adicionar.php" method="post">
                    <div class="card align-items-start">
                <div class="icon">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 392.214 392.214" style="enable-background:new 0 0 392.214 392.214;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M365.879,119.201c-10.862-38.734-51.068-61.329-89.802-50.467c-2.386,0.678-4.736,1.479-7.04,2.4
                                    c-0.911-38.891-32.222-70.202-71.114-71.114c-40.217-0.942-73.584,30.896-74.526,71.114c-8.53-3.384-17.623-5.121-26.8-5.12
                                    c-37.641-0.073-69.138,28.545-72.661,66.021c-3.766,40.052,25.65,75.573,65.701,79.339v138.52
                                    c-0.072,8.193,3.141,16.073,8.92,21.88l0.4,0.44c6.607,6.193,14.854,10.358,23.76,12c24.786,5.284,50.057,7.965,75.4,8
                                    c24.103,0.008,48.132-2.675,71.64-8c8.865-1.726,17.077-5.88,23.72-12c6-5.816,9.342-13.845,9.24-22.2v-138.64
                                    c4.294-0.413,8.542-1.206,12.696-2.371C354.147,198.141,376.742,157.935,365.879,119.201z M288.837,350.014
                                    c0.022,4.645-1.856,9.096-5.2,12.32c-4.765,4.333-10.634,7.268-16.96,8.48c-22.508,5.117-45.517,7.706-68.6,7.72
                                    c-24.403-0.041-48.734-2.629-72.6-7.72c-6.274-1.106-12.102-3.978-16.8-8.28l-0.32-0.28c-3.216-3.257-5.001-7.663-4.96-12.24
                                    v-13.36c30.632,5.477,61.683,8.275,92.8,8.36c31.093,0.049,62.127-2.723,92.72-8.28L288.837,350.014z M295.837,197.854
                                    c-3.822,0-6.92,3.098-6.92,6.92v117.92c-30.575,5.714-61.616,8.566-92.72,8.52c-31.127-0.082-62.184-2.947-92.8-8.56v-117.88
                                    c-0.021-3.76-3.041-6.815-6.8-6.88c-10.88,0.003-21.55-3.001-30.831-8.68c-27.813-17.019-36.563-53.362-19.545-81.175
                                    c17.019-27.813,53.362-36.563,81.175-19.545c1.304,0.715,2.804,0.988,4.276,0.779c3.762-0.534,6.378-4.017,5.844-7.779
                                    c-0.32-1.52-0.48-2.96-0.48-4.32c0-1.36,0-2.813,0-4.36c-0.027-1.024-0.027-2.049,0-3.073
                                    c0.849-32.596,27.961-58.332,60.557-57.484c32.596,0.849,58.332,27.961,57.484,60.556c0,1.56,0.12,2.92,0,4.36
                                    c-0.12,1.44-0.28,2.88-0.48,4.32c-0.275,1.749,0.135,3.537,1.145,4.992c2.167,3.121,6.454,3.895,9.575,1.728
                                    c9.157-5.505,19.635-8.422,30.319-8.44c32.607-0.055,59.085,26.333,59.14,58.94C354.832,171.321,328.444,197.799,295.837,197.854z
                                    "/>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="info row">
                   <div class="sabores col-lg-6">
                        Sabores de pizza : <br>
                    <?php foreach ($sabores as $sabor) { ?>
                        <input type="text" name="sabores[]" value="<?= $sabor ?>" readonly><br>
                        <?php } ?>
                   </div>
                   <div class="adicionais col-lg-6">
                       Adicionais: <br>
                       <?php foreach ($adicionais as $adicional ) { ?>
                          <input type="text" name="adicionais[]" value="<?= $adicional ?>" readonly><br>
                        <?php   } ?>
                   </div>
                   <div class="bebidas col-lg-6">
                       Bebidas: <br>
                       <?php foreach ($bebidas as $bebida ) { ?>
                          <input type="text" name="bebidas[]" value="<?= $bebida ?>" readonly><br>
                        <?php   } ?>
                   </div>
                   <div class="valor col-lg-6">
                       Valor total: <br>
                       
                        <span> R$ <input type="text" name="valorTotal" value="<?= strval($total) ?>"></span><br>
                       
                   </div>
                </div>
            </div>
            <div class="botoes">
                <a href="javascript:history.back()" class="btn-pizzaria">Alterar</a>
                <button class="btn-pizzaria" type="submit">Confirmar</button>
            </div>
                </form>
            </div>
        
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>