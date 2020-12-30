<?php
/*
 * Copyright (C) 2020 Joe Nilson <joenilson@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Artesanik\SyliusExtendedCheckoutPlugin\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Sylius\Bundle\AddressingBundle\Form\Type\AddressType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Validator\Constraints\Regex;

final class AddressTypeExtension extends AbstractTypeExtension
{
    /**
     * @inheritdoc
     */
    public function __construct()
    {

    }

    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('phoneNumber', TelType::class, [
            'label' => 'sylius.form.address.phone_number',
            'required' => true,
            'constraints' => [
                new NotBlank([
                    'message' => 'artesanik_extended_checkout.form.address.phone_number.not_blank',
                    'groups' => 'sylius',
                ]),
                new Length([
                    'min' => 10,
                    'max' => 11,
                    'minMessage' => 'artesanik_extended_checkout.form.address.phone_number.min_value',
                    'maxMessage' => 'artesanik_extended_checkout.form.address.phone_number.max_value',
                    'groups' => 'sylius',
                ]),
                new Regex([
                    'pattern' => '/^([0-9]{10,11}+)$/',
                    'message' => 'artesanik_extended_checkout.form.address.phone_number.regex',
                    'groups' => 'sylius',
                ])
            ],
        ]);
    }

    /**
     * @inheritdoc
     */
    public static function getExtendedTypes(): iterable
    {
        return [AddressType::class];
    }
}