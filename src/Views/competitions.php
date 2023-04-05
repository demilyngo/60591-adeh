<?php
require("components/header.php");
require ('src/Views/header.php');
?>
    <h1>Список соревнований:</h1>

    <main class="container">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
        </div>
        <?php
        foreach ($data['competitions'] as $competition) { ?>
            <div class="d-flex text-muted pt-3">

                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                        <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                            <div class="d-flex justify-content-between">
                                <strong class="text-gray-dark"><?= $competition->Name ?></strong>

                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <?php
        }
        ?>


    </main>





<?php require 'src/Views/footer.php'?>