# Paynow Button Link Generator

This little service allows you to generate links (urls) for paynow.co.zw simple payment buttons. Typical for when you are accepting donations through paynow for example.

## Official Documentation

I only have one endpoint POST /v1/generate-paynow-link which you can utilize to generate the links. Don't worry neither am i demanding or chatty either, if you give me following parameters

- merchant_email => The address of the merchant account accepting payments on paynow. This field is required
- amount => The amount that you are charging the user. Example 95.25. This field is optional
- customer_email => The email address of the user being charged. This is optional
- reference => The reference number of the payment. This is optional too
- editable => A boolean (true/false) indicating if the user is allowed to change the payment details like amount when making the payment on paynow.

That's all.
