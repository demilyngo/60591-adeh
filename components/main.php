            <main class="px-3 text-center">
                <h1>Платформа для мониторинга соревнований.</h1>
                <p class="lead">Организуйте и участвуйте в соревнованиях.</p>
                <p class="lead">
                    <?php if($_SESSION['username']) {
                        echo('<a href="../competitions.php" class="btn btn-lg btn-light fw-bold border-white bg-warning">Участник</a>
                        <a href="../registerCompetition.php" class="btn btn-lg btn-light fw-bold border-white bg-warning">Организатор</a>');
                    }
                    else{
                        echo('<a href="../login.php" class="btn btn-lg btn-light fw-bold border-white bg-warning">Участник</a>
                        <a href="../login.php" class="btn btn-lg btn-light fw-bold border-white bg-warning">Организатор</a>');
                    }
                    ?>
                </p>
            </main>
