# Paynow Button Link Generator

This little service allows you to generate links (urls) for [Paynow](https://paynow.co.zw) simple payment buttons. Typical for when you are accepting donations through paynow for example.

## Official Documentation

This service only has one endpoint `POST /v1/generate-paynow-link` or if you're RESTafarian `POST /v2/links`, which you can utilize to generate the links. Don't worry it's neither demanding nor chatty, It only requires the following parameters. Here's the base URL `https://paynow-simple-button.herokuapp.com`, you can also use it to discover the API on your own.

- `amount` : The amount that you are charging the user. Example 95.25. This field is required
- `merchant_email` : The email address of the merchant account accepting payments on paynow. This field is required
- `reference` : The reference number of the payment. This is optional too
- `customer_email` : The email address of the user being charged. This is optional
- `editable` : A boolean, `true / false`, indicating if the user is allowed to change the payment details e.g amount when completing payment on paynow. This field is optional

Here's a snapshot for reference.

![example paynow php button documentation](https://raw.githubusercontent.com/Berzel/paynow-button/master/paynow_link.png)

That's all.
