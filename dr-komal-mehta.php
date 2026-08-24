<?php
ob_start();
?>
<div class="breadcrumb-bar">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" aria-label="home"><i
                                    class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Dr. Komal Mehta</li>
                    </ol>
                    <h2 class="breadcrumb-title">Dr. Komal Mehta</h2>
                </nav>
            </div>
        </div>
    </div>
</div>




<?php
$content = ob_get_clean();
require 'layout.php';
?>