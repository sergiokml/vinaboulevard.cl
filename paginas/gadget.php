<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<style type='text/css'>
/*<![CDATA[*/
#fbplikebox{display: block;padding: 0;z-index: 99999;position: fixed;}
.fbplbadge {background-color:#3B5998;display: block;height: 150px;top: 50%;margin-top: -75px;position: absolute;left: -47px;width: 47px;background-image: url('http://1.bp.blogspot.com/-PUYBb2326SY/T13eXFv1sPI/AAAAAAAABdE/VOqfHVMXhWk/s1600/w2b_vertical-right.png');background-repeat: no-repeat;overflow: hidden;-webkit-border-top-left-radius: 8px;-webkit-border-bottom-left-radius: 8px;-moz-border-radius-topleft: 8px;-moz-border-radius-bottomleft: 8px;border-top-left-radius: 8px;border-bottom-left-radius: 8px;}
/*]]>*/
</style>
<script type='text/javascript'>
/*<![CDATA[*/
    (function(w2b){
        w2b(document).ready(function(){
            var $dur = 'medium'; // Duration of Animation
            w2b('#fbplikebox').css({right: -250, 'top' : 350 })
            w2b('#fbplikebox').hover(function () {
                w2b(this).stop().animate({
                    right: 0
                }, $dur);
            }, function () {
                w2b(this).stop().animate({
                    right: -250
                }, $dur);
            });
            w2b('#fbplikebox').show();
        });
    })(jQuery);
/*]]>*/
</script>
<div id='fbplikebox' style='display:none;'>
    <div class='fbplbadge'></div> 
    <iframe src='http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Ffacebook.com%2FDepartamentosVinaBoulevard&amp;width=250&amp;height=260&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23C4C4C4&amp;stream=false&amp;header=false' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:250px; height:260px;background:#FFFFFF;' allowtransparency='true'></iframe>
</div>

