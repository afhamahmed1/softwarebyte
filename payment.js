// import { isRedirect } from "node-fetch";

if(document.readyState == 'loading'){

    document.addEventListener('DOMContentLoaded', ready)
}
else{
    ready()
}

function ready() {
    
    const paymentPlan = document.getElementsByClassName("single-price-box");
    for (var i = 0; i < paymentPlan.length; i++) {
      const id = paymentPlan[i].id
      const title = paymentPlan[i].getElementsByTagName("h3")[0].innerHTML
      const amountcontainer = paymentPlan[i].getElementsByTagName("h2")[0].innerHTML
      const amount = parseInt(amountcontainer.match(/\d+.\d*/g))
      const plan = String(amountcontainer.match(/[a-z]*\s[a-z]*/gi))
      const purchaseButton = paymentPlan[i].getElementsByClassName("pay-btn")[0]
    //   purchaseButton.addEventListener('click', checkoutSession)
      purchaseButton.addEventListener('click', popup)
      const hideButton = document.getElementsByClassName("cross")[0]
        hideButton.addEventListener("click", closepopup)
        
      
    }


  

    paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        style: {
            color: 'blue',
            shape: 'pill',
            height: 50,
            
        },
        createOrder: () => {
          return fetch("/create-order",{
            method: "post",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify({
              items: [
                {
                  id:parseInt(document.getElementsByClassName("payment-method")[0].id), 
                  quantity: 1,
                },
                
              ],
            }),
            
          }).then((res) => {
            if (res.ok) return res.json()
            return res.json().then(json => Promise.reject(json))
          }).then((order) => order.id).catch(e=> {
            console.error(e.error)
          })
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal');
    
    
    
}

function popup(event){
    document.getElementsByClassName("container2")[0].style.display = "flex"
    const id =  event.target.parentElement.parentElement.id
    console.log(id)
    const popup = document.getElementsByClassName("payment-method")[0]
    popup.id = id
    console.log(popup)
    const stripe = document.getElementsByClassName("stripe")[0]
    console.log(stripe)
   
    stripe.addEventListener('click', checkoutSession)
}

function closepopup() {
    document.getElementsByClassName("container2")[0].style.display = "none"
}

function checkoutSession(event) {
    
    const purchaseItemId = parseInt( event.target.parentElement.parentElement.id)
    
    fetch('/create-checkout-session', {
      method: 'POSt',
      headers: {
          'Content-Type': 'application/json',
      },
      
      body: JSON.stringify({
          items: [{
              id: purchaseItemId
              
          }]
      }),
  })
  .then(res => {
      if (res.ok) return res.json()
      return res.json().then(json => Promise.reject(json))
  })
  .then(({url}) => {
      console.log(url)
      window.location = url
  })
  .catch(e => {
      console.error(e.error)
  })
}


