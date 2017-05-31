<div class="nav-wrapper yellow-text blue darken-4">
    <a href="#" class="right brand-logo">Logo</a>
    <?php
       include '../php/function/menu.php';
         
           writeMenu($data);
        
    ?>
    <a href="#" data-activates="nav-mobile01" class="button-collapse"><i class="material-icons">menu</i></a>
</div>

<script type="text/javascript">
        <?php
        echo "$(doument).ready(function () {\n";
        echo "$('.button.collapse').sideNav();\n";
        echo "});\n";
        foreach ($_POST['choices'] as $key => $value){
            if(isset($value['targetDiv']) && !is_nul($value['targetDiv'])){
                    echo "\n";
                    echo '$("#' .$value['id'].'").clickfunction()(';
                    echo "\n";
                    echo '$("#' .$value['tergetDiv'].'").load(=".$value[loadPago];
            }
        }
        ?>
</script>

<script type="text/javascript">
    $('.button-collapse').sideNav();
</script>