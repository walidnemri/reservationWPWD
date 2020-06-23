<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* reservation/client.js */
class __TwigTemplate_5fcc1d1a1619cbb82f3ec78bdb70ee4c1511f5b0d16f61a7a0ca8c0c276ed3cb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/client.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/client.js"));

        // line 1
        echo "// A reference to Stripe.js initialized with a fake API key.
//Sign in to see examples pre-filled with your key.
var stripe = Stripe(\"pk_test_TYooMQauvdEDq54NiTphI7jx\");
// The items the customer wants to buy
var purchase = {
  items: [{ id: \"xl-tshirt\" }]
};
// Disable the button until we have Stripe set up on the page
document.querySelector(\"button\").disabled = true;
fetch(\"/create.php\", {
  method: \"POST\",
  headers: {
    \"Content-Type\": \"application/json\"
  },
  body: JSON.stringify(purchase)
})
  .then(function(result) {
    return result.json();
  })
  .then(function(data) {
    var elements = stripe.elements();
    var style = {
      base: {
        color: \"#32325d\",
        fontFamily: 'Arial, sans-serif',
        fontSmoothing: \"antialiased\",
        fontSize: \"16px\",
        \"::placeholder\": {
          color: \"#32325d\"
        }
      },
      invalid: {
        fontFamily: 'Arial, sans-serif',
        color: \"#fa755a\",
        iconColor: \"#fa755a\"
      }
    };
    var card = elements.create(\"card\", { style: style });
    // Stripe injects an iframe into the DOM
    card.mount(\"#card-element\");
    card.on(\"change\", function (event) {
      // Disable the Pay button if there are no card details in the Element
      document.querySelector(\"button\").disabled = event.empty;
      document.querySelector(\"#card-errors\").textContent = event.error ? event.error.message : \"\";
    });
    var form = document.getElementById(\"payment-form\");
    form.addEventListener(\"submit\", function(event) {
      event.preventDefault();
      // Complete payment when the submit button is clicked
      payWithCard(stripe, card, data.clientSecret);
    });
  });
// Calls stripe.confirmCardPayment
// If the card requires authentication Stripe shows a pop-up modal to
// prompt the user to enter authentication details without leaving your page.
var payWithCard = function(stripe, card, clientSecret) {
  loading(true);
  stripe
    .confirmCardPayment(clientSecret, {
      payment_method: {
        card: card
      }
    })
    .then(function(result) {
      if (result.error) {
        // Show error to your customer
        showError(result.error.message);
      } else {
        // The payment succeeded!
        orderComplete(result.paymentIntent.id);
      }
    });
};
/* ------- UI helpers ------- */
// Shows a success message when the payment is complete
var orderComplete = function(paymentIntentId) {
  loading(false);
  document
    .querySelector(\".result-message a\")
    .setAttribute(
      \"href\",
      \"https://dashboard.stripe.com/test/payments/\" + paymentIntentId
    );
  document.querySelector(\".result-message\").classList.remove(\"hidden\");
  document.querySelector(\"button\").disabled = true;
};
// Show the customer the error from Stripe if their card fails to charge
var showError = function(errorMsgText) {
  loading(false);
  var errorMsg = document.querySelector(\"#card-errors\");
  errorMsg.textContent = errorMsgText;
  setTimeout(function() {
    errorMsg.textContent = \"\";
  }, 4000);
};
// Show a spinner on payment submission
var loading = function(isLoading) {
  if (isLoading) {
    // Disable the button and show a spinner
    document.querySelector(\"button\").disabled = true;
    document.querySelector(\"#spinner\").classList.remove(\"hidden\");
    document.querySelector(\"#button-text\").classList.add(\"hidden\");
  } else {
    document.querySelector(\"button\").disabled = false;
    document.querySelector(\"#spinner\").classList.add(\"hidden\");
    document.querySelector(\"#button-text\").classList.remove(\"hidden\");
  }
};";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reservation/client.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// A reference to Stripe.js initialized with a fake API key.
//Sign in to see examples pre-filled with your key.
var stripe = Stripe(\"pk_test_TYooMQauvdEDq54NiTphI7jx\");
// The items the customer wants to buy
var purchase = {
  items: [{ id: \"xl-tshirt\" }]
};
// Disable the button until we have Stripe set up on the page
document.querySelector(\"button\").disabled = true;
fetch(\"/create.php\", {
  method: \"POST\",
  headers: {
    \"Content-Type\": \"application/json\"
  },
  body: JSON.stringify(purchase)
})
  .then(function(result) {
    return result.json();
  })
  .then(function(data) {
    var elements = stripe.elements();
    var style = {
      base: {
        color: \"#32325d\",
        fontFamily: 'Arial, sans-serif',
        fontSmoothing: \"antialiased\",
        fontSize: \"16px\",
        \"::placeholder\": {
          color: \"#32325d\"
        }
      },
      invalid: {
        fontFamily: 'Arial, sans-serif',
        color: \"#fa755a\",
        iconColor: \"#fa755a\"
      }
    };
    var card = elements.create(\"card\", { style: style });
    // Stripe injects an iframe into the DOM
    card.mount(\"#card-element\");
    card.on(\"change\", function (event) {
      // Disable the Pay button if there are no card details in the Element
      document.querySelector(\"button\").disabled = event.empty;
      document.querySelector(\"#card-errors\").textContent = event.error ? event.error.message : \"\";
    });
    var form = document.getElementById(\"payment-form\");
    form.addEventListener(\"submit\", function(event) {
      event.preventDefault();
      // Complete payment when the submit button is clicked
      payWithCard(stripe, card, data.clientSecret);
    });
  });
// Calls stripe.confirmCardPayment
// If the card requires authentication Stripe shows a pop-up modal to
// prompt the user to enter authentication details without leaving your page.
var payWithCard = function(stripe, card, clientSecret) {
  loading(true);
  stripe
    .confirmCardPayment(clientSecret, {
      payment_method: {
        card: card
      }
    })
    .then(function(result) {
      if (result.error) {
        // Show error to your customer
        showError(result.error.message);
      } else {
        // The payment succeeded!
        orderComplete(result.paymentIntent.id);
      }
    });
};
/* ------- UI helpers ------- */
// Shows a success message when the payment is complete
var orderComplete = function(paymentIntentId) {
  loading(false);
  document
    .querySelector(\".result-message a\")
    .setAttribute(
      \"href\",
      \"https://dashboard.stripe.com/test/payments/\" + paymentIntentId
    );
  document.querySelector(\".result-message\").classList.remove(\"hidden\");
  document.querySelector(\"button\").disabled = true;
};
// Show the customer the error from Stripe if their card fails to charge
var showError = function(errorMsgText) {
  loading(false);
  var errorMsg = document.querySelector(\"#card-errors\");
  errorMsg.textContent = errorMsgText;
  setTimeout(function() {
    errorMsg.textContent = \"\";
  }, 4000);
};
// Show a spinner on payment submission
var loading = function(isLoading) {
  if (isLoading) {
    // Disable the button and show a spinner
    document.querySelector(\"button\").disabled = true;
    document.querySelector(\"#spinner\").classList.remove(\"hidden\");
    document.querySelector(\"#button-text\").classList.add(\"hidden\");
  } else {
    document.querySelector(\"button\").disabled = false;
    document.querySelector(\"#spinner\").classList.add(\"hidden\");
    document.querySelector(\"#button-text\").classList.remove(\"hidden\");
  }
};", "reservation/client.js", "/Applications/XAMPP/xamppfiles/htdocs/reservationsWPWD/templates/reservation/client.js");
    }
}
