{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

{if $page.page_name != 'index'}
<div class="breadcrumb_wrapper" data-depth="{$breadcrumb.count}">
    <div class="container">
        <nav data-depth="{$breadcrumb.count}" class="breadcrumb">
          <ol itemscope itemtype="http://schema.org/BreadcrumbList">
            {foreach from=$breadcrumb.links item=path name=breadcrumb}
              <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="{$path.url}">
                  <span itemprop="name">{$path.title}</span>
                </a>
                <meta itemprop="position" content="{$smarty.foreach.breadcrumb.iteration}" />
              </li>
            {/foreach}
            {if $page.page_name == 'cart'}
                <li itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                      <span itemprop="name">{l s='Shopping Cart' d='Shop.Theme'}</span>
                    </a>
                  </li>
            {/if}
          </ol>
        </nav>
    </div>
</div>
{/if}