<div style="width:255px;height: 255px; z-index:0;">
    <img src="photos/dotedimg.png" style="float:right" id="dotedimgid" alt="">
</div>

<script>
        let img=document.getElementById("dotedimgid");
        let index =100;
        let increase=true;
        
        setInterval(function(){
            if(index>99.5){
                increase=false;
            }
            else if(index<90){
                increase=true;
            }
            if(increase){
                index+=0.2;
            }
            else{
                index-=0.2;
            }
            img.style.width =index+"%";

        }, 100);
        
    </script>