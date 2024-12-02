document.body.setAttribute("class", "");
document.body.setAttribute("style", "display:block");

jQuery(document).ready(function() {

    if( jQuery('div').hasClass('wphf-hook') ) {
        jQuery('div').removeClass('wphf-hook');
        jQuery('div').removeAttr('style');
    }
});

elem = document.querySelector("body");
while(elem.attributes.length > 0) {
    elem.removeAttributeNode(elem.attributes[0]);
}

elem = document.querySelector("html");
while(elem.attributes.length > 0) {
    elem.removeAttributeNode(elem.attributes[0]);
}