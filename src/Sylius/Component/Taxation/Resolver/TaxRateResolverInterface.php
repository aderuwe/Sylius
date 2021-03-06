<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Taxation\Resolver;

use Sylius\Component\Taxation\Model\TaxableInterface;
use Sylius\Component\Taxation\Model\TaxRateInterface;

/**
 * Tax rate resolver interface.
 *
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
interface TaxRateResolverInterface
{
    /**
     * Get the tax rate for given taxable good and context.
     *
     * @param TaxableInterface $taxable
     * @param array            $criteria
     *
     * @return null|TaxRateInterface
     */
    public function resolve(TaxableInterface $taxable, array $criteria = array());
}
