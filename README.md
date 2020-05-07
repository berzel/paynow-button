# Paynow Button Link Generator

This little service allows you to generate links (urls) for [Paynow](https://paynow.co.zw) simple payment buttons. Typical for when you are accepting donations through paynow for example.

## Official Documentation

I only have one endpoint `POST /v1/generate-paynow-link` which you can utilize to generate the links. Don't worry neither am i demanding or chatty either, if you give me following parameters. Here's my base URL `https://ancient-eyrie-77250.herokuapp.com`

- `amount` : The amount that you are charging the user. Example 95.25. This field is required
- `merchant_email` : The email address of the merchant account accepting payments on paynow. This field is required
- `reference` : The reference number of the payment. This is optional too
- `customer_email` : The email address of the user being charged. This is optional
- `editable` : A boolean, `true / false`, indicating if the user is allowed to change the payment details e.g amount when completing payment on paynow. This field is optional

Here's a snapshot for reference.

![example paynow php button documentation](https://raw.githubusercontent.com/Berzel/paynow-button/master/paynow_link.png)

That's all.
