<br>

<div id="footer">
	<?php
        setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese"); date_default_timezone_set('America/Recife');
        echo utf8_encode(strftime('%A, %d de %B de %Y', strtotime('today')));
         //echo date ("l d.m.Y");
    ?>
    <hr>
    <footer>
            &copy; 2019 - Susi Pessôa <br>
            Terapeuta Integrativa - Terapias Holísticas. 

            <h6>Site criado e desenvolvido por <a href="https://jcgsr.github.io/" title="Portfólio de Jovane"><img src="/SusiWebSite/images/jota.png" alt="Logo de Jovane" style="width: 15px;"></a></h6>

                <script src="jquery.js"></script>
                <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
                <script>
                        $(document).ready( function () {
                        $('#myTable').DataTable();
                        } );
                </script>
    </footer>
	
</div>
    
