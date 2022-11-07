var qtyPro=document.querySelectorAll(".qty");

qtyPro.forEach(element => {
    element.addEventListener("change",function(){
       var tr=element.parentNode.parentNode.parentNode;
       var price_detail=parseFloat(tr.childNodes[5].childNodes[1].childNodes[3].innerHTML);
     
       var price_total=tr.childNodes[9].childNodes[3];
       console.log(price_detail,price_total);
       var numberPro=parseFloat(element.value);
          price_total.innerHTML=(price_detail*numberPro).toFixed(2);
    })
});