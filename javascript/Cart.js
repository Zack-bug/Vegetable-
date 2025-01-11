function addToCart(productName, productPrice) {
  // Sepet verilerini yerel depolamadan al
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  // Ürünü sepete ekle
  cart.push({ name: productName, price: productPrice });

  // Sepeti yerel depolamaya kaydet
  localStorage.setItem("cart", JSON.stringify(cart));

  alert(`${productName} sepete eklendi!`);
}
// Sepeti yerel depolamadan al
const cart = JSON.parse(localStorage.getItem("cart")) || [];
const cartItems = document.getElementById("cartItems");
let totalPrice = 0;

// Sepet içeriğini listele
cart.forEach((item) => {
  const li = document.createElement("li");
  li.textContent = `${item.name} - ${item.price} TL`;
  cartItems.appendChild(li);
  totalPrice += item.price;
});

// Toplam tutarı güncelle
document.getElementById("totalPrice").textContent = totalPrice;
