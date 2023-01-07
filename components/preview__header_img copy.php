<div class="gradient">
    <img src="photos/5.jpg"   id="image" class="preview__header_img" alt="not">
    
</div>
<script>
        var imageSources = ["photos/1.jpg", "photos/2.jpg", "photos/3.png", "photos/4.jpg", "photos/5.jpg"];

        var index = 0;
        setInterval(function() {
            if (index === imageSources.length) {
                index = 0;
            }
            document.getElementById("image").src = imageSources[index];
            index++;
        }, 5000);
        
    </script>