var product_size=document.querySelectorAll(".product-size");

var btn_check_out=document.getElementById("check-out");
var link_checkOut=document.getElementById("link_checkOut");


link_checkOut.addEventListener("click",function (event){

    var flag=0;
    product_size.forEach(element => {
        if(element.value=='0') {
          flag=1;
        }
    });
    if(flag==1){
       confirm("You have a Producrt don't have choose size .");
       event.preventDefault();
    }
   } );
  function submitForm(){
    var form=document.getElementById("form-cart");
    form.submit();
  }