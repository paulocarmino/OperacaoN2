<div class="footer">
    <div>
        <strong>Copyright</strong> Globalweb / Oi &copy; 2016 | Dúvidas e manutenção: Paulo Carmino (paulo.jardim@globalweb.com.br)
    </div>
</div>

<!-- Mainly scripts -->
<script src="../../../inspina/js/jquery-2.1.1.js"></script>
<script src="../../../inspina/js/bootstrap.min.js"></script>
<script src="../../../inspina/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../../../inspina/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- FooTable -->
<script src="../../../inspina/js/plugins/footable/footable.all.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="../../../inspina/js/inspinia.js"></script>
<script src="../../../inspina/js/plugins/pace/pace.min.js"></script>

<!-- Page-Level Scripts -->
<script>
    $(document).ready(function() {

        $('.footable').footable({
            "paging": {
                "enabled": false
            }
        });

    });

</script>

<script>
    $(document).ready(function() {
        $('#modal').load('ajax/test.html');
    });
</script>

</body>

</html>
