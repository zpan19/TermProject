document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".quantity-btn");

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      const name = button.dataset.name;
      const action = button.dataset.action;

      fetch("/OnlineShop/php/update.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: `name=${encodeURIComponent(name)}&action=${action}`,
      }).then(() => {
        location.reload();
      });
    });
  });
});
