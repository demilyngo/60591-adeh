            <main class="px-3 text-center">
                <h1>Платформа для мониторинга соревнований.</h1>
                <p class="lead">Организуйте и участвуйте в соревнованиях.</p>
                <div class="d-flex flex-row bd-highlight mb-3 justify-content-around">
                    <?php for($i=0; $i!=3; $i++){
                    $item = $competitions->fetch()?>
                        <div class="p-2 bd-highlight border border-secondary border-3">
                            <h6 class="mb-0"><?=$item['Name']?></h6>
                            <p class="mb-0 opacity-75"><?=$item['description']?></p>
                        </div>
                    <?php }?>
                </div>
                </p>
            </main>
