
<script>
	var index = 0;
    var navLi = $("#page-sidebar .sidemenu>li");// 导航li
    <?php
        $c = get('page');               
        $a = get('c');
        if ($c == "Aoutus"){
            echo 'index = 0;';
        }elseif ($c == "Rule"){
            echo 'index = 1;';
        }elseif ($c == "Deposit"){
            echo 'index = 2;';
        }elseif ($c == "Withdraw"){
            echo 'index = 3;';
        }elseif ($c == "Problem"){
            echo 'index = 4;';
        }elseif ($c == "Partner"){
            echo 'index = 5;';
        }elseif ($c == "Contactus"){
            echo 'index = 6;';
        }
        if($a||$c=="AgentApply"){
            echo 'index = 5';
        }
	?>	
	
    navLi.removeClass("active");
    if(index != null){
        navLi.eq(index).addClass("active");
    }
</script>