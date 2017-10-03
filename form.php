<script src="jquery-1.7.2.js" type="text/javascript" /></script>


<form method="post" id="form1" >
    <table>         
    </table><br>
    <table class="tab tab_Chemical" border="0">
        <tr><th><label for="id_wat_hl">Water Column Half life (days):</label></th>
            <td><input type="text" name="wat_hl" id="id_wat_hl" /></td></tr>
    </table>
    <table class="tab tab_Crop" border="0" style="display:none">
        <tr><th><label for="id_zero_height_ref">Zero Height Reference:</label></th>
            <td><input type="text" name="zero_height_ref" id="id_zero_height_ref" /></td></tr>    
    </table>    
    <table class="tab tab_Physical" border="0" style="display:none">
        <tr><th><label for="id_mas_tras_cof">Mass Transfer Coefficient (m/s):</label></th>
            <td><input type="text" name="mas_tras_cof" id="id_mas_tras_cof" /></td></tr>
    </table>
    <table align="center">
        <tr><td><input class="back" type="button" value="Back" /></td>
            <td><input class="next" type="button" value="Next" /></td>
            <td><input class="submit" type="submit" value="Submit" /></td></tr>
    </table></form>

<script>
$(document).ready(function () {
    var tab_pool = ["tab_Chemical", "tab_Crop", "tab_Physical"];
    var visible = $(".tab:visible").attr('class').split(" ")[1];
    var curr_ind = $.inArray(visible, tab_pool);
    $(".submit").hide();
    $(".back").hide();

    $('.next').click(function () {
        if (curr_ind < 2) {
            $(".tab:visible").hide();
            curr_ind = curr_ind + 1;
            $("." + tab_pool[curr_ind]).show();
            $(".submit").hide();
            $(".back").show();
        }
        if (curr_ind == 2) {
            $(".submit").show();
            $(".next").hide();
        }
    });

    $('.back').click(function () {
        if (curr_ind > 0) {
            $(".tab:visible").hide();
            curr_ind = curr_ind - 1;
            $("." + tab_pool[curr_ind]).show();
            $(".submit").hide();
            $(".next").show();
        }
        if (curr_ind == 0) {
            $(".back").hide();
        }
    });
    $(".next").click(function () {
        $(".tab tab_Chemical").validate({
            rules: {
                wat_hl: "required"
            }
        })
    })
    $(".next").click(function () {
        $(".tab tab_Crop").validate({
            rules: {
                zero_height_ref: "required"
            }
        })
    })    
    $(".next").click(function () {
        $(".tab tab_Physical").validate({
            rules: {
                mas_tras_cof: "required"
            }
        })
    })        
    
  
});

</script>
<?php
$a1 = $_POST['wat_hl'];
$b1 = $_POST['zero_height_ref'];
$c1 = $_POST['mas_tras_cof'];
echo "$a1==$b1==$c1";
?>

            
            
            
            
            
            
