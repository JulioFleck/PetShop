<!-- HEADER -->
<header class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <h2>Sistema Petshop Cão Amigo</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- / HEADER -->
<?php 
function __autoload($classe) {
	include "../model/$classe.php";
}
?>
