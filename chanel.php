    <?php      
            $cache_expire = 60 * 60 * 24 * 365; 
            encabezado ( "Pragma: público" );
            header ( "Cache-Control: maxage =" . $cache_expire );
            header ( 'Caduca:' . gmdate ( 'D, d MYH: i: s' , time () + $cache_expire ) . 'GMT' );   
        ?>
    <script src=" https://cdns-files.dzcdn.net/js/min/dz.js "></script>
  
