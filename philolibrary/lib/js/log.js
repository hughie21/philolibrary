//javaScript
function check(){
var user = document.querySelector('#user').value;
var password = document.querySelector('#password').value;
if(user == 'admin' && password == 'qaz753951'){
    alert("登录成功");
    setTimeout("move()", 1000);
    }else{
        alert("登录失败");
        return false;
    }
}

function move(){
    window.location.href="./backstage/index.html";
}