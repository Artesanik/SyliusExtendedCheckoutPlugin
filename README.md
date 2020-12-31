<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

<h1 align="center">Sylius Extended Checkout Plugin</h1>

## Documentation
This Sylius plugin enables the phoneNumber required in the Addressing Checkout Form.

It do three verifications

- NotBlank
- Range between 10 and 11 phone numbers
- Pattern to only allow numbers

## Quickstart Installation

1. Install using composer

```
composer require artesanik/sylius-extended-checkout-plugin
```

2. Clear cache

```
bin/console cache:clear
```

TODO Tasks

- [ ] Add a config file to load phone variables from config.yaml or env vars
- [ ] Add envvars for the phone pattern regex
- [ ] Add envvars for the phone min/max lenght
- [ ] Enable other phone patterns
