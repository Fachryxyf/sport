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

<section id="newproducts_block" class="home_block_col">
  <h4 class="home_block_col_title"><span>{l s='New arrivals' d='Modules.Newproducts.Shop'}</span></h4>
  <div class="products">
    {assign var='is' value=0}
    {foreach from=$products item="product"}
        {if isset($tc_config.YBC_TC_NUMBER_GROUP) && $tc_config.YBC_TC_NUMBER_GROUP != ""}    
            {if $is%$tc_config.YBC_TC_NUMBER_GROUP == 0}    
                <div class="group_item_product">
            {/if}
        {/if}
        {assign var='is' value=$is+1}
        {include file="catalog/_partials/miniatures/product.tpl" product=$product}
        {if isset($tc_config.YBC_TC_NUMBER_GROUP) && $tc_config.YBC_TC_NUMBER_GROUP != ""}
            {if $is%$tc_config.YBC_TC_NUMBER_GROUP == 0}
                </div>
            {/if}
        {/if}
    {/foreach}
    {if isset($tc_config.YBC_TC_NUMBER_GROUP) && $tc_config.YBC_TC_NUMBER_GROUP != ""}
        {if $is%$tc_config.YBC_TC_NUMBER_GROUP != 0}
                </div>
        {/if}
    {/if}
  </div>
</section>

