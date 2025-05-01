<?php
 $prev_test = $data['test'] - 1;
 $stress = $data['stress'];
 $stress_val = $_SESSION['stress'.$data['test']];
?>
<link href="<?php echo URLROOT; ?>/assets/css/test.css" rel="stylesheet">
<img id="art" src="<?php echo URLROOT; ?>/assets/art.png" alt="">
<img id="logo" src="<?php echo URLROOT; ?>/assets/holixer_logo.png" alt="">
<img src="<?php echo URLROOT; ?>/assets/natural_logo.png" alt="" width="100" style="padding:20px;float:right"> <br><br><br>
    <main>
        <form style="margin-top: -400px;" method="POST" id="stress_test" action="<?php echo URLROOT; ?>/test/stress_submit/<?php echo $data['test']; ?>">
        <h2 id="question"> <?php echo $stress->question; ?>
        <br><span style="font-size:18px !important">(<?php echo $data['test']; ?>/5)</span></h2>
        <div class=range data-labels='["1"
                <?php for($i=2;$i<=100;$i++){
                echo ',"'.$i.'"';
                } ?>]'>
            
            <input name=range type=range min=0 step=1 max=100 value=<?php echo $stress_val; ?> >
                <div class=range-output>
                    <output class=output name=output for=range><span></span></output>
                </div>
                <div class=label-container>
                    <div class=left-label><?php echo $stress->option1; ?></div>
                    <div class=right-label><?php echo $stress->option5; ?></div>
                </div>
            </div>
        </form>
    </main>

<div class="wrap" style="margin-top:-250px">
<div class="wrapper">
    <?php if($data['test']>1): ?>
    <a href="<?php echo URLROOT; ?>/test/stress/<?php echo $prev_test; ?>" style="padding-right:100px"><button class="button button2">Previous</button></a>
    <?php endif; ?>
    
   <button class="button" onclick="document.getElementById('stress_test').submit();">Next</button></a>  
</div>
</div>


<div id="consolPopup">
    	<h1>How to use?</h1><br>
        <center><img src="<?php echo URLROOT; ?>/assets/slider.gif" alt="" width="250"><br> <br><p>Please slide to give your answer. Select only one answer for each question. You can always change your answer by going back to the previous question.</p></center>
        <br>
        
            <center><span class="button close-btn" onclick="close_it()">Skip</span></center><br><br>
</div>

<script src="<?php echo URLROOT; ?>/assets/js/test.js"></script>







<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" />

<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.js"></script>

<style>
    #consolPopup {
    display:none;
    width:600px !important;
    margin:0;
    padding:0;
    border-radius:50px !important;
}
#consolPopup h1 {
    text-align:center;
    margin:0;
    padding:10px;
    text-align;
    center;
    color:#fff;
    margin-bottom:10px;
    background: #64902a;
   
}
#consolPopup p {
    padding:10px;
}
.fancybox-skin {
    padding:0 !important;
    border-radius: 30px;
}
.fancybox-close{
    display:none;
}
.fancybox-inner {
    border-radius: 30px;
}
</style>
<script>

$('.close-btn').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).parent().hide();
        $.fancybox.close();
});

    jQuery(document).ready(function () {
    function openFancybox() {
        setTimeout(function () {
        $("#consolPopup").fancybox({'overlayShow': true}).trigger('click');
        }, 500);
        setTimeout(function () {
            jQuery('.fancybox-close').trigger('click');
        }, 10000);
    };
    var visited = jQuery.cookie('visited');
    var x = <?php echo $data['test']; ?>;

    if (visited == 'yes' && x!='1') {
        
    } else {
        openFancybox(); 
    }
    jQuery.cookie('visited', 'yes', {
        expires: 1 
    });
    jQuery("#popuplink").fancybox({modal:true, maxWidth: 400, overlay : {closeClick : true}});
});
</script>