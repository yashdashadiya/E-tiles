let currPageName = document.location.href.split('/')[document.location.href.split('/').length - 1].split('.')[0];
var url = "url('photos/" + currPageName + "_page_header.jpg')";
console.log(url);
document.documentElement.style.setProperty('--etiles-page-header-url', url);
// document.getElementsByClassName("page_header")[0].style.backgroundImage = url;
let page_header_title;
let page_header_path="\"Home/ ";
if(currPageName=='about_us'){
    page_header_title='"About Company"';
    page_header_path+="About us\""
}
else if(currPageName=='contact_us'){
    page_header_title='"Contact Us"';
    page_header_path+="Contact us\""
}
else if(currPageName=='catalogue'){
    page_header_title='"Catalogue"';
    page_header_path+="catalogue\""
}
else if(currPageName=='tiles_calculator'){
    page_header_title='"Tiles Calculator"';
    page_header_path+="Export/ Tiles Calculator\"";
}
else if(currPageName=='packing_list'){
    page_header_title='"Packing List"';
    page_header_path+="Export/ Packing List\"";
}
else if(currPageName=='service'){
    page_header_title='"Service"';
    page_header_path+="Export/ Service\"";
}
console.log(currPageName);
console.log(typeof(page_header_path));
document.documentElement.style.setProperty('--etiles-page-header-title', page_header_title);
document.documentElement.style.setProperty('--etiles-page-header-path', page_header_path);
