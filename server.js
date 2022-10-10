

require('dotenv').config()
const express = require("express")
const app = express()
const stripe = require('stripe')(process.env.STRIPE_PRIVATE_KEY)

app.set('view engine', 'ejs')
app.use(express.json())
app.use(express.static("public"))

const shopItems = new Map([
    [1, { priceInCents: 1599, name: 'Small Business'}],
    [2, { priceInCents: 9999, name: 'Professional'}],
    [3, { priceInCents: 12099, name: 'Enterprice'}],
    [4, { priceInCents: 15099, name: 'Small Business'}],
    [5, { priceInCents: 19999, name: 'Professional'}],
    [6, { priceInCents: 22099, name: 'Enterprice'}],

])
app.post('/create-checkout-session', async (req, res) => {
    try{
        const session = await stripe.checkout.sessions.create({
            payment_method_types: ['card'],
            line_items: req.body.items.map(item => {
                const storeItem = shopItems.get(item.id)
                console.log(item.id)
                console.log(storeItem)
                return {
                    price_data: {
                        currency: 'usd',
                        product_data:{
                            name: storeItem.name
                        },
                        unit_amount: storeItem.priceInCents
                    },
                    quantity: 1
                    
                    
                }
            }),
            mode: 'payment',
            success_url: process.env.SERVER_URL + '/success.html',
            cancel_url: process.env.SERVER_URL + '/cancel.html'
        })
        res.json({ url: session.url})
        
    } catch (e){
        res.status(500).json({error: e.message})
    }
})

const paypal = require("@paypal/checkout-server-sdk")
const Environment = 
    process.env.NODE_ENV === "production"
        ?paypal.core.LiveEnvironment
        :paypal.core.SandboxEnvironment

const paypalClient = new paypal.core.PayPalHttpClient(
    new Environment(
        process.env.PAYPAL_CLIENT_ID, 
        process.env.PAYPAL_CLIENT_SECRET
    ))
    
app.get("/", (req, res) =>{
    res.render("index", { paypalClientId: process.env.PAYPAL_CLIENT_ID,})
})


const storeItems = new Map([
    [1, { price: 15.99, name: 'Small Business' }],
    [2, { price:  99.99, name: 'Professional'}],
    [3, { price:  120.99, name: 'Enterprice'}],
    [4, { price: 150.99, name: 'Small Business' }],
    [5, { price:  199.99, name: 'Professional'}],
    [6, { price:  220.99, name: 'Enterprice'}],

])

app.post("/create-order", async (req, res) => {
    const request = new paypal.orders.OrdersCreateRequest()
    const total = req.body.items.reduce((sum, item) => {
        return sum + (storeItems.get(item.id).price * item.quantity)
    }, 0)
    console.log(total)
    request.prefer("return=representation")
    request.requestBody({
        intent: "CAPTURE",
        purchase_units: [
            {
                amount: {
                    currency_code: 'USD',
                    value: total,
                    breakdown:{
                        item_total: {
                            currency_code: 'USD',
                            value: total
                        }
                    }
                },
                items: req.body.items.map(item => {
                    const shopItem= storeItems.get(item.id)
                    return {
                        name: shopItem.name,
                        // description: "",
                        unit_amount: {
                            currency_code: "USD",
                            value: shopItem.price
                        },
                        quantity: item.quantity
                    }
                })
            }
        ]
    })

    try {
        const order = await paypalClient.execute(request)
        console.log(order)
        res.json({id: order.result.id})
    } catch (e){
        res.status(500).json({ error: e.message})
    }
})


app.listen(3000, () => { console.log('server running')})