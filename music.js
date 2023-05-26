function payment() {
    var a = confirm('You want to Payment !!');
    if (a == 1) {
        let r = Math.floor(Math.random() * 1000000000);
        alert('Transection id is :' + r);
    } else {
        alert('Payment is Failed');
    }

}


function order() {
    document.getElementById('order'); {
        window.location.assign('mycart.php');
    }
}