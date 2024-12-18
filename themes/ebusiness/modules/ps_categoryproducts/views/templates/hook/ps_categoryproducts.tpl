{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="col-md-12 col-xs-12">
    <section class="categoryproducts">
      <h2 class="h1 products-section-title text-uppercase">
        <span>
            {if $products|@count == 1}
              {l s='%s other product in the category' sprintf=[$products|@count] d='Modules.Categoryproducts.Shop'}
            {else}
              {l s='%s other products in the category' sprintf=[$products|@count] d='Modules.Categoryproducts.Shop'}
            {/if}
        </span>
      </h2>
      <div class="categoryproducts_content">
          {foreach from=$products item="product"}
              {include file="catalog/_partials/miniatures/product.tpl" product=$product}
          {/foreach}
      </div>
    </section>
</div>
