/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var drag = new Object;
drag.firstX = -1;
drag.firstY = -1;
drag.selected = null;


function mouseDown(event) {
    var element, x, y;
    if(ie) {
        x = window.event.clientX;
        y = window.event.clientY;
        element = window.event.srcElement;
    } else {
        x = event.clientX;
        y = event.clientY;
        element = event.target;
    }
    if (element.draggable) {
        drag.firstX = x - parseInt(element.style.left);
        drag.firstY = y - parseInt(element.style.top);
        drag.selected = element;
    }
}

function mouseUp() {
    drag.selected = null;
}

function mouseMoved(event) {
    if (! drag.selected)
        return;
        
    var x, y;
    if (ie) {
        x = window.event.clientX;
        y = window.event.clientY;
    } else {
        x = event.clientX;
        y = event.clientY;
    }
    drag.selected.style.left = (x - drag.firstX) + "px";
    drag.selected.style.top  = (y - drag.firstY) + "px";
}

var ie = document.all;

if (ie) {
    document.attachEvent("onmousedown", mouseDown);
    document.attachEvent("onmouseup",   mouseUp);
    document.attachEvent("onmousemove", mouseMoved);
} else {
    document.addEventListener("mousedown", mouseDown, false);
    document.addEventListener("mousemove", mouseMoved, false);
    document.addEventListener("mouseup",   mouseUp, false);
}