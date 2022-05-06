<div>
    <h1>
        it is home <?php echo $name; ?>
    </h1>
    <h2>
        <ul class="red">
            <?php foreach ($friends as $friend) { ?>
                <li><?= $friend ?></li>
            <?php } ?>
        </ul>
    </h2>
</div>