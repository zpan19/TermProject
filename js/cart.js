document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".add-to-cart");

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      const name = button.dataset.name;
      const price = button.dataset.price;
      const quantity = button.dataset.quantity;

      fetch("/OnlineShop/php/add_to_cart.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: `name=${encodeURIComponent(
          name
        )}&price=${price}&quantity=${quantity}`,
      }).then((response) => {
        if (response.ok) {
          alert(`✅ ${name} has been added to cart!`);
        } else {
          alert("❌ Failed to add to cart.");
        }
      });
    });
  });
});
