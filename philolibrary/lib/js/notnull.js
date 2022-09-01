charset="utf-8";
//javascript
//判断框内值是否为空
function validateForm()
{
var x=document.forms["form"]["book"].value;
if (x==null || x=="")
{
alert("搜索内容不能为空噢！");
return false;
}
}

function validateForms(){
    var a =document.forms["form"]["bname"].value;
    var b =document.forms["form"]["aname"].value;
    var c = document.forms["form"]["lang"].value;
    if (a == null || a== ""){
        alert("搜索内容不能为空噢！");
        return false;
    }
    if (b == null || b== ""){
        alert("搜索内容不能为空噢！");
        return false;
    }
    if (c == null || c== ""){
        alert("搜索内容不能为空噢！");
        return false;
    }
}
