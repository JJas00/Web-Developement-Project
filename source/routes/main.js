const express = require('express')
const router = express.Router()

router.get('/home', (req, res, next) => {
    res.render('home',data)
})
router.get('/account', (req, res, next) => {
    res.render('account',data)
})
router.get('/products', (req, res, next) => {
    res.render('products',data)
})
router.get('/productdetails', (req, res, next) => {
    res.render('productdetails',data)
})
router.get('/cart', (req, res, next) => {
    res.render('cart',data)
})
module.exports = router