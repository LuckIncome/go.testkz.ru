<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
<script src="<?php echo e(asset('assets/js/carousel.js')); ?>"></script>
<script type="text/javascript">
    var token = document.head.querySelector('meta[name="csrf-token"]');
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
    window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
</script>
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
<script src="https://yastatic.net/share2/share.js"></script>

<?php /**PATH C:\Users\jandos\Desktop\OpenServer\domains\go.testkz.ru\resources\views/partials/scripts.blade.php ENDPATH**/ ?>