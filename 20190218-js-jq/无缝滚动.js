    //  0 先获取元素
    var oCon = document.getElementById("con");
    var oPrev = document.getElementById("prev");
    var oNext = document.getElementById("next");
    var oUl = oCon.getElementsByTagName("ul")[0];
    var oLi = oUl.getElementsByTagName("li");
    var time = setInterval(moves,30);
    var oLiw =oLi[0].offsetWidth
    var speed = 2
    //  1 复制出3个 li 来 ,前提是先获取原来的 li
    oUl.innerHTML += oUl.innerHTML

    // 3 把Ul 变宽 a 先获取一个Li的宽 在乘以6 （li 的长度）
    var oLilength = oLi.length
    oUl.style.width = (oLiw*oLilength) + "px"
   
    function moves(){
        if(oUl.offsetLeft<'-'+(oUl.offsetWidth/2)){
            oUl.style.left = 0;
        }
        if(oUl.offsetLeft>0){
            oUl.style.left = '-'+(oUl.offsetWidth/2)+'px'
        }
        oUl.style.left = oUl.offsetLeft + speed + 'px';
    }
    oUl.onmouseover = function(){
        time=clearInterval(time)
    }
    oUl.onmouseout = function(){
        time=setInterval(moves,30)
    }
    oPrev.onclick=function(){
        speed= -2
    }
    oNext.onclick=function(){
        speed= 2
    }
