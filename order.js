function updateTotal(qtyName) {
    var total = computeTotal(qtyName);
    document.getElementById(getTotalId(qtyName)).innerHTML = toPrice(total);
    computeTotals();
}

function computeTotal(qtyName) {
    var qty = parseInt(document.getElementById(qtyName).value);
    if (isNaN(qty)) {
        return 0;
    } else {
        return qty * getUnitPrice(qtyName);
    }
}

function getTotalId(qtyName) {
    switch (qtyName) {
        case "qty_vs":
            return 'total_vs';
        case "qty_vsop":
            return 'total_vsop';
        case "qty_napoleon":
            return 'total_napoleon';
        case "qty_xo_bottle":
            return 'total_xo_bottle';
        case "qty_xo_s":
            return 'total_xo_s';
        case "qty_xo_l":
            return 'total_xo_l';
        case "qty_pineau_white":
            return 'total_pineau_white';
        case "qty_pineau_red":
            return 'total_pineau_red';
        case "qty_pineau_old":
            return 'total_pineau_old';
        default:
            return "";
    }

}

function getUnitPrice(qtyName) {
    switch (qtyName) {
        case "qty_vs":
            return 19;
        case "qty_vsop":
            return 26;
        case "qty_napoleon":
            return 35;
        case "qty_xo_bottle":
            return 49;
        case "qty_xo_s":
            return 52;
        case "qty_xo_l":
            return 69;
        case "qty_pineau_white":
            return 9.5;
        case "qty_pineau_red":
            return 9.7
        case "qty_pineau_old":
            return 15;
        default:
            return 0;
    }
}

function computeTotals() {
    computeTotalQty();
    computeTotalPrice();
}

function computeTotalQty() {
    var qty = 0;
    qty += parseInt(document.getElementById("qty_vs").value);
    qty += parseInt(document.getElementById("qty_vsop").value);
    qty += parseInt(document.getElementById("qty_napoleon").value);
    qty += parseInt(document.getElementById("qty_xo_bottle").value);
    qty += parseInt(document.getElementById("qty_xo_s").value);
    qty += parseInt(document.getElementById("qty_xo_l").value);
    qty += parseInt(document.getElementById("qty_pineau_white").value);
    qty += parseInt(document.getElementById("qty_pineau_red").value);
    qty += parseInt(document.getElementById("qty_pineau_old").value);
    document.getElementById('total_qty').innerHTML = qty;
}

function computeTotalPrice() {
    var price = 0;
    price += computeTotal("qty_vs");
    price += computeTotal("qty_vsop");
    price += computeTotal("qty_napoleon");
    price += computeTotal("qty_xo_bottle");
    price += computeTotal("qty_xo_s");
    price += computeTotal("qty_xo_l");
    price += computeTotal("qty_pineau_white");
    price += computeTotal("qty_pineau_red");
    price += computeTotal("qty_pineau_old");
    document.getElementById('total_price').innerHTML = toPrice(price);
}

function parsePrice(string) {
    return parseInt(string.replace(',', '.'));
}

function toPrice(price) {
    return price.toFixed(2).replace('.', ',') + "€";
}