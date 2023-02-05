// document.addEventListener("DOMContentLoaded", function() {
//   console.log("Loging is Completed");
// });
// document.body.classList.add('displaynone');
// console.log("website is loding");
// window.addEventListener("load", showPage);

// function showPage() {
//     console.log("website is loding");
// //   document.body.classList.remove('displaynone');
// }
// var loader = document.getElementById("loading");
// window.addEventListener("load", function () {
//   loader.style.height = "100%";
//   loader.style.width = "100%";

//   loader.style.borderRadius = "50%";
//   loader.style.visibility = "hidden";
// });
// window.addEventListener("load", function() {
//     document.getElementById("animation").style.display = "none";
//     document.getElementById("main").style.visibility = "visible";

//   })
// document.body.classList.add('js-loading');

// window.addEventListener("load", showPage, false);

// function showPage() {
//   document.body.classList.remove('js-loading');
// }

receivedOrder = window.addEventListener('scroll', function () {
    if (checkItsvisible(document.getElementById('receivedOrder'))) {
        console.log('Itsvisible');
        increment(document.getElementById('receivedOrder'), 50);
        this.removeEventListener('scroll', arguments.callee);
    }
}
);

function checkItsvisible(element) {
    var position = element.getBoundingClientRect();

    // checking whether fully visible
    if (position.top >= 0 && position.bottom <= window.innerHeight) {
        // console.log('Element is fully visible in screen');
    }
    // checking for partial visibility
    if (position.top < window.innerHeight && position.bottom >= 0) {
        return true
        // console.log('Element is partially visible in screen');
    }
}

function mobile_nav_statusChage(element,status) {
    if (!status) {
        console.log("open");
        element.style.right = "0px";
        element.style.transition = "1s";
        return true;
    }
    else {
        console.log("close");
        element.style.right = "-320px";
        element.style.transition = "1s";
        return false;
    }
}

var openInfoStatus = false;
function openInfo() {
    let mobile_nav_content_container = document.getElementById("mobile_nav_content_container");

    this.openInfoStatus=mobile_nav_statusChage(mobile_nav_content_container,this.openInfoStatus);
}
var openNavButtonStatus=false;
function openNavButton() {
    let mobile_nav_content_container = document.getElementById("nav_button_container");
    this.openNavButtonStatus=mobile_nav_statusChage(mobile_nav_content_container,this.openNavButtonStatus);
}


function flip_icon(about_us_info_flip) {
    let icon = about_us_info_flip.children[1].children[1];
    if (icon.style.transform === '') {
        icon.style.transform = 'rotate(180deg)';
        icon.style.transition = "1s";
    } else {
        icon.style.transform = '';
        icon.style.transition = "1s";
    }
}
function navigatePageUrl(Element, rqPageName) {
    Element = Element.firstChild;
    let currPageName = document.location.href.split('/')[document.location.href.split('/').length - 1];
    if (currPageName == rqPageName) {
        Element.href = "#";
        return false;
    }
    else {
        Element.href = rqPageName;
    }
}
function onload() {
    let currPageName = document.location.href.split('/')[document.location.href.split('/').length - 1].split('.')[0];
    document.getElementById(currPageName).classList.add("selcetedButton")
}

function calculateCalculatorForm() {
    let length = document.getElementById("length");
    let width = document.getElementById("width");
    let value = document.getElementById("tiles_size").value;
    let tiles_size;
    if (value == 1) {
        tiles_size = 0.36;
    }
    else if (value == 2) {
        tiles_size = 0.72;
    }
    else if (value == 3) {
        tiles_size = 0.64;
    }
    else {
        tiles_size = 1.28;
    }
    let area = Math.ceil(length.value * width.value);
    let totalTitles = Math.ceil(area / tiles_size);
    let totalboxes = Math.ceil(totalTitles / 4);

    document.getElementById("area").innerHTML = " " + area + " sq.m.";
    document.getElementById("no_of_tiles").innerHTML = totalTitles;
    document.getElementById("no_of_boxes").innerHTML = totalboxes;
}
function resetCalculatorForm() {
    document.getElementById("length").value = ''
    document.getElementById("width").value = '';
    // document.getElementById("tiles_size").value='';
    document.getElementById("area").innerHTML = "0 sq.m.";
    document.getElementById("no_of_tiles").innerHTML = "0";
    document.getElementById("no_of_boxes").innerHTML = "0";
}
function increment(element, number) {
    increment_count = 1
    if (number > 1000) {
        increment_count = 2
    }
    console.log("increment stated")
    const increment = setInterval(
        function () {
            currentNumber = element.innerHTML;
            if (currentNumber >= number) {
                clearInterval(increment);
                element.innerHTML = number + "+";
                return;
            }
            element.innerHTML = parseInt(currentNumber) + increment_count;
            // console.log(totleTime / number);
            // console.log(1/number*element.innerHTML);
            // console.log(totleTime / number+1/number*element.innerHTML);
            // console.log(totleTime / number+(1/number*element.innerHTML)*1000)
        }
        , 50);
    console.log("increment finish")
}
function expandDropdown(element){
    dropdown=element.parentNode.nextElementSibling;
    if(dropdown.style.maxHeight==0+"px"){
        element.style.background="white";
        element.style.color="var(--etiles-primary-color)";
        element.style.transform="rotate(90deg)";
        dropdown.style.maxHeight=180+"px";
        dropdown.style.transition = "1s";
    }
    else{
        element.style.background="var(--etiles-primary-color)";
        element.style.color="white";
        element.style.transform="rotate(0deg)";
        dropdown.style.maxHeight=0+"px";
        dropdown.style.transition = "1s";
    }
}
function download(url) {
    const a = document.createElement('a')
    a.href = url
    a.download = url.split('/').pop()
    document.body.appendChild(a)
    a.click()
    document.body.removeChild(a)
  }