<div class="mx-auto" id='product-component-1618518864417'></div>
<script type="text/javascript">
/*<![CDATA[*/
(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }
  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }
  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'tyvedigital.myshopify.com',
      storefrontAccessToken: '19477c806807f289b4007a1b349c1b93',
    });
    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: '6684715909303',
        node: document.getElementById('product-component-1618518864417'),
        moneyFormat: '%C2%A3%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "contents": {
      "img": false,
      "title": false,
      "price": false
    },
    "text": {
      "button": "Add to cart"
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "button": false,
      "buttonWithQuantity": true
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "font-family": "Gill Sans, sans-serif",
        "font-size": "0.9em",
        "padding": "0.4rem 0.9rem",

        ":hover": {
          "background-color": "transparent",
          "border": "solid 1px #1C253C"
        },
        "background-color": "#1c253c",
        ":focus": {
          "background-color": "transparent",
          "border": "solid 1px #1C253C"        },
        "border-radius": "4px",
      },
      "quantityInput": {
        "font-size": "0.9em",
        "padding": "0.4rem 0.9rem",
      }
    },
    "text": {
      "button": "Add to cart"
    }
  },
  "option": {},
  "cart": {
    "styles": {
      "button": {
        "font-family": "Gill Sans, sans-serif",
        "font-size": "0.9em",
        ":hover": {
          "background-color": "#303f66"
        },
        "background-color": "#1c253c",
        ":focus": {
          "background-color": "#303f66"
        },
        "border-radius": "4px"
      }
    },
    "text": {
      "total": "Subtotal",
      "button": "Checkout"
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "font-family": "Gill Sans, sans-serif",
        "background-color": "#1c253c",
        ":hover": {
          "background-color": "#303f66"
        },
        ":focus": {
          "background-color": "#303f66"
        }
      },
      "count": {
        "font-size": "16px"
      }
    }
  }
},
      });
    });
  }
})();
/*]]>*/
</script>