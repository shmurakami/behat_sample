<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>Behat Test</h1>

    <?php if ($_GET['foo'] === 'bar'): ?>
        <p>foo = bar</p>
    <?php endif; ?>

    <p id="target"></p>

<script>
(function () {
    const p = document.querySelector('#target');
        p.textContent = 'sample';
})();

</script>

</body>
</html>
