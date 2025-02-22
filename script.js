function orderProduct(productName, price) {
    const phoneNumber = "+6282227092615"; 
    const message = `Halo, saya ingin membeli ${productName} seharga Rp ${price.toLocaleString()}. Bagaimana cara pembayarannya?`;

    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
    window.open(whatsappUrl, '_blank');
}