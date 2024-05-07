let arrow="up";
document.querySelector("#barsIcon").addEventListener('click',()=>{
    
    if(arrow==='up'){
        document.querySelector(".nav2").style.transform=`translateY(0)`;
        arrow='down';
    }
    else{
        document.querySelector(".nav2").style.transform=`translateY(-350px)`;
        arrow='up';
    }
    
})
