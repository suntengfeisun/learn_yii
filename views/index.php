<div class="rightList2 marginbtm15">
    <ul class="ulRightList1s">
        <?php
        foreach ($result as $row) {
            ?>
            <li>
                <a title= <?php echo $row['title']; ?> href="#" target="_blank"><?php echo $row['title']; ?></a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>