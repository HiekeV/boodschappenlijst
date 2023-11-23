const tabel = document.getElementById("myTable");
const productPrice = document.getElementsByClassName("productPrice");
const productQuantity = document.getElementsByClassName("productQuantity");
const productTotalCost = document.getElementsByClassName("productTotalCost");
const totalCost = document.getElementById("totalCost");

const productAmountMessage = () => console.log('aantal producten is gewijzigd');

const calcProductTotalCost = () => {
    let calcTotalCost = 0
    for (let i = 0; i < productPrice.length; i++) {

        let subTotal = +(productPrice[i].innerHTML * productQuantity[i].value).toFixed(2);
        
        productTotalCost[i].innerHTML = subTotal.toFixed(2)

        calcTotalCost += subTotal;
    }

    totalCost.innerHTML = calcTotalCost.toFixed(2);
};

tabel.addEventListener("change", productAmountMessage);

window.onload = function() {
    for (let i = 0; i < productQuantity.length; i++) {
        productQuantity[i].value = 0;
    }    
}




