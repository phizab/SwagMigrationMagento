<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\MigrationMagento\Profile\Magento19\Converter;

use Swag\MigrationMagento\Profile\Magento\Converter\CountryConverter;
use Swag\MigrationMagento\Profile\Magento\DataSelection\DataSet\CountryDataSet;
use Swag\MigrationMagento\Profile\Magento19\Magento19Profile;
use SwagMigrationAssistant\Migration\MigrationContextInterface;

class Magento19CountryConverter extends CountryConverter
{
    public function supports(MigrationContextInterface $migrationContext): bool
    {
        return $migrationContext->getProfile()->getName() === Magento19Profile::PROFILE_NAME
             && $migrationContext->getDataSet()::getEntity() === CountryDataSet::getEntity();
    }
}
