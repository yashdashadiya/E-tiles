function openInfo(){
    let nav_icon=document.getElementsByClassName("icon");
    let mobile_nav_content_container=document.getElementById("mobile_nav_content_container");

    if(nav_icon.innerHTML=="menu"){
        nav_icon.innerHTML="close";

        // mobile_nav_content_container.style.display="inline";
        mobile_nav_content_container.style.right="0px";
        mobile_nav_content_container.style.transition = "1s";
    }
    else{
        nav_icon.innerHTML="menu";
        mobile_nav_content_container.style.right="-320px";
        // mobile_nav_content_container.style.display="none";
        mobile_nav_content_container.style.transition = "1s";
    }
}
function flip_icon(about_us_info_flip){
    let icon=about_us_info_flip.children[1].children[1];
    if (icon.style.transform === '') {
        icon.style.transform = 'rotate(180deg)';
        icon.style.transition = "1s";
    } else {
        icon.style.transform = '';
        icon.style.transition = "1s";
    }
}
function navigatePageUrl(Element,rqPageName){
    Element=Element.firstChild;
    let currPageName=document.location.href.split('/')[document.location.href.split('/').length-1];
    if(currPageName==rqPageName){
        Element.href="#";
        return false;

    }
    else{
        Element.href=rqPageName;
    }
}