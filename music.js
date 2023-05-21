function payment() {
    var a = confirm('You want to Payment !!');
    if (a == 1) {
        var b = prompt('Enter Address');
        alert('Payment is successfull');
        let r = Math.floor(Math.random() * 1000000000);
        alert('Transection id is :' + r);
        window.location.assign('mycart.php');
    } else {
        alert('Payment is Failed');
    }

}


function order() {
    document.getElementById('order'); {
        window.location.assign('mycart.php');
    }
}