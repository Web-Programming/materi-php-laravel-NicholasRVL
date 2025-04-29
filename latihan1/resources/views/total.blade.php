<div>

    <?php echo 'angka1 : '. $angka1 ?><br>
    <?php echo 'angka2 : '. $angka2 ?><br>
    <?php echo 'angka3 : '. $angka3 ?><br>
    <?php echo 'Total : '. $angka1 + $angka2 + $angka3; ?>

    <br>
    <br>
    <br>

</div>

<div>

    {{ $angka1 }} + {{$angka2}} + {{$angka3}} = {{$angka1 + $angka2 + $angka3}}

</div>