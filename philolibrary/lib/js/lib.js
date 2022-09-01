function popupToggle(){
    var popup = document.getElementById('popup');
    popup.classList.toggle('active');
} 

function backgroundChang(){
    var bcolor = document.getElementById('b-color').value;
    var background = document.getElementById('page');
    if(bcolor == 1){
        background.style.background = "url(../lib/resource/picture/304926843.jpg) ";
    }else if(bcolor == 2){
        background.style.background = "url(../lib/resource/picture/304926844.jpg) ";
    }else if(bcolor == 3){
        background.style.background = "url(../lib/resource/picture/304926845.jpg) ";
    }else if(bcolor == 4){
        background.style.background = "url(../lib/resource/picture/304926846.jpg) ";
    }
}

function ChangeFontSize(){
    var fsize = document.getElementById('f-size').value;
    var size = document.getElementById('txt');
    if(fsize == 1){
        size.style.font= "12px/150% Microsoft YaHei,宋体,serif";
    }else if(fsize == 2){
        size.style.font = "14px/150% Microsoft YaHei,宋体,serif";
    }
    else if(fsize == 3){
        size.style.font = "16px/150% Microsoft YaHei,宋体,serif";
    }
    else if(fsize == 4){
        size.style.font = "18px/150% Microsoft YaHei,宋体,serif";
    }
    else if(fsize == 5){
        size.style.font = "20px/150% Microsoft YaHei,宋体,serif";
    }
    else if(fsize == 6){
        size.style.font = "24px/150% Microsoft YaHei,宋体,serif";
    }
}

function ChangeFontColor(){
    var fcolor = document.getElementById('f-color').value;
    var color = document.getElementById('con');
    if(fcolor == 1){
        color.style.color= "#000";
    }else if(fcolor == 2){
        color.style.color= "#fff";
    }
    else if(fcolor == 3){
        color.style.color= "blue";
    }
    else if(fcolor == 4){
        color.style.color= "red";
    }
    else if(fcolor == 5){
        color.style.color= "green";
    }
}