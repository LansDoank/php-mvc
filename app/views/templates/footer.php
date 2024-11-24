<script src="<?= BASEURL; ?>/js/jquery-3.7.1.min.js"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.min.js">
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
    })
</script>
<script src="<?= BASEURL; ?>/js/script.js"></script>
</body>

</html>