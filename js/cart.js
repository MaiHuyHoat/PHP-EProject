var remove = document.querySelectorAll(".remove"); // xoa san pham khi nhan nut xoa
var subTotal = document.querySelectorAll(".delete-product"); // lay gia tri tong so tien don hang
remove.forEach(element => { // giam tong tien san pham
    let cat = element.parentElement.parentElement;
    element.addEventListener("click", function() {
        let agn = parseInt(cat.childNodes[3].childNodes[3].childNodes[0].innerHTML); // lay so luong san pham bi xoa
        let price = parseFloat(cat.childNodes[3].childNodes[3].childNodes[2].innerHTML); //lay gia san pham bi xoa
        let subTotalFirst = parseFloat(subTotal[0].innerHTML);

        
            subTotal[0].innerHTML =( subTotalFirst - agn * price).toFixed(2); // giam gia tong
        
        cat.style.display = "none"; // xoa san pham khoi danh sach
    });
});