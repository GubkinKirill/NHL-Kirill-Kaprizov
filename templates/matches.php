<section class="matches">
    <div class="matches__container _container">
        <img src="./img/developments/backgraund.png" alt="">
        <div class="matches__check">

        </div>
        <div class="matches__block">

            <table class="matches_table">
                <tr class="matches_table_head">
                    <td>Сезон</td>
                    <td>Команда</td>
                    <td>Турнир</td>
                    <td>Матчи</td>
                    <td>Г</td>
                    <td>П</td>
                    <td>О</td>
                </tr>
                <?php
                $table = get_table_('championships');
                foreach ($table as $i) : ?>
                    <tr class="matches_table_head_body">

                        <td><?php echo $i["season"] ?></td>
                        <td><?php echo $i["command"] ?></td>
                        <td><?php echo $i["tournament"] ?></td>
                        <td><?php echo $i["matches"] ?></td>
                        <td><?php echo $i["goal"] ?></td>
                        <td><?php echo $i["transmission"] ?></td>
                        <td><?php echo $i["assistant"] ?></td>
                    </tr>
                <?php endforeach ?>

            </table>

            <table class="matches_table">
                <tr class="matches_table_head">
                    <td>Сезон</td>
                    <td>Команда</td>
                    <td>Турнир</td>
                    <td>Матчи</td>
                    <td>Г</td>
                    <td>П</td>
                    <td>О</td>
                </tr>
                <?php
                $table = get_table_('national_cups');
                foreach ($table as $i) : ?>
                    <tr class="matches_table_head_body">

                        <td><?php echo $i["season"] ?></td>
                        <td><?php echo $i["command"] ?></td>
                        <td><?php echo $i["tournament"] ?></td>
                        <td><?php echo $i["matches"] ?></td>
                        <td><?php echo $i["goal"] ?></td>
                        <td><?php echo $i["transmission"] ?></td>
                        <td><?php echo $i["assistant"] ?></td>
                    </tr>
                <?php endforeach ?>

            </table>

            <table class="matches_table">
                <tr class="matches_table_head">
                    <td>Сезон</td>
                    <td>Команда</td>
                    <td>Турнир</td>
                    <td>Матчи</td>
                    <td>Г</td>
                    <td>П</td>
                    <td>О</td>
                </tr>
                <?php
                $table = get_table_('nationa_team');
                foreach ($table as $i) : ?>
                    <tr class="matches_table_head_body">

                        <td><?php echo $i["season"] ?></td>
                        <td><?php echo $i["command"] ?></td>
                        <td><?php echo $i["tournament"] ?></td>
                        <td><?php echo $i["matches"] ?></td>
                        <td><?php echo $i["goal"] ?></td>
                        <td><?php echo $i["transmission"] ?></td>
                        <td><?php echo $i["assistant"] ?></td>
                    </tr>
                <?php endforeach ?>

            </table>






        </div>
    </div>
</section>