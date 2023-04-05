<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<footer class="bg-dark w-100">

    <!-- Copyright -->
    <div class="text-center text-white h-100 fs-5" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Сургут
    </div>
    <!-- Copyright -->
</footer>
</body>
<script>
    var myModal = new bootstrap.Modal(document.getElementById('messageModal'), {})
    <?php if($data['message']) { ?>
    myModal.show()
    <? } ?>
</script>

</html>