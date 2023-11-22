cart = [];

function add_cart(id) {
  $.ajax({
    method: "POST",
    url: "/api/cart/add",
    data: {
      id,
    },
  }).done(function (data) {
    if (data.status == 200) {
      Toastify({
        text: data.msg,
        duration: 3000,
        style: {
          background: "linear-gradient(to right, #00b09b, #96c93d)",
        },
      }).showToast();
    } else {
      Toastify({
        text: data.msg,
        duration: 3000,
        style: {
          background: "linear-gradient(to right, #F64C18, #EE9539)",
        },
      }).showToast();
    }
  });

  //   const check_exist = cart.findIndex((item) => item.id === id);

  //   if (check_exist !== -1) {
  //     Toastify({
  //       text: "Khoá học đã có trong giỏ hàng",
  //       duration: 3000,
  //       style: {
  //         background: "linear-gradient(to right, #F64C18, #EE9539)",
  //       },
  //     }).showToast();
  //   } else {
  //     cart.push({
  //       id: id,
  //       thumbnails: thumbnails,
  //       price: price,
  //     });
  //     setCookie("cart", JSON.stringify(cart));
  //     Toastify({
  //       text: "Thêm khoá học thành công",
  //       duration: 3000,
  //       style: {
  //         background: "linear-gradient(to right, #00b09b, #96c93d)",
  //       },
  //     }).showToast();
  //   }
}

function load_cart_from_cookie() {
  let cart_cookie = getCookie("cart");

  if (cart_cookie) {
    cart = JSON.parse(cart_cookie);
  }
}

function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
