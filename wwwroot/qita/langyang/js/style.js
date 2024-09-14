window.onload = function() {
    var divs = document.getElementsByTagName('div');
    for (var i = 1; i < divs.length; i++) {
        divs[i].onclick = function() {
            if (this.id !== 'div_kong') {
                // 增大div并添加悬浮效果
                this.style.transform = 'scale(1.1)';    //放大110%倍
                this.style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.1)';  //设置阴影
                this.style.borderRadius = 'solid 1px red';    //设置边框
            }
            huifu(divs,this.getAttribute('value'))
        }
    }
    setInterval(function () {
        var qipan_div = document.getElementById('qipan_div')
        if (qipan_div.getAttribute('value') === '1'){

        } else {
            location.reload();  //刷新页面
        }
    },1500) //每隔1.5 s刷新一次页面
}

var huifu = function (divs,value) {
    for (var i = 1; i <= 25; i++ ) {
        if (i == value) {   //当发生了点击
            const xhr = new XMLHttpRequest();
            xhr.open('GET','qipan_select.php?yidong='+value);
            xhr.send();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) { //服务端返回了所有结果之后
                    if (xhr.status >= 200 && xhr.status < 300) {
                        var qipan_div = document.getElementById('qipan_div')
                        if(qipan_div.getAttribute('value') === '1'){
                            //代表是第二次落子
                            if (xhr.response === "Failed"){
                                //alert(xhr.response)
                                divs[value].style.transform = 'scale(1)';
                                divs[value].style.boxShadow = 'none';
                            }
                            qipan_div.setAttribute('value', '0');
                            location.reload();
                        } else {
                            //表示是第一次起子
                            //起子之前，需要确定是否上锁，是否可以起子
                            //创建房间者为 狼 ,即cookie为 home_username_one 的人

                            //起子结束
                            if (xhr.response === "Failed"){
                                //alert('Failed')
                                qipan_div.setAttribute('value', '0');
                                location.reload();
                            } else if (xhr.response === "Halfway") {
                                qipan_div.setAttribute('value', '1');
                            } else  {
                                alert(xhr.response)
                            }
                        }

                    } else {
                        //alert('响应错误');
                    }

                }
            }
        } else {
            divs[i].style.transform = 'scale(1)';
            divs[i].style.boxShadow = 'none';
        }
    }
}