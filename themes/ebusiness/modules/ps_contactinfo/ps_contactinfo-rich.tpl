{*
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="contact-rich">
  <div class="block">
    <div class="icon"><i class="material-icons">place</i></div>
    <div class="data">{$contact_infos.address.formatted nofilter}</div>
  </div>
  {if $contact_infos.phone}
    <div class="block">
      <div class="icon"><i class="material-icons">local_phone</i></div>
      <div class="data">
        {l s='Call us:' d='Shop.Theme'}<br/>
        <a href="tel:{$contact_infos.phone}">{$contact_infos.phone}</a>
       </div>
    </div>
  {/if}
  {if $contact_infos.fax}
    <div class="block">
      <div class="icon"><i class="material-icons">present_to_all</i></div>
      <div class="data">
        {l s='Fax:' d='Shop.Theme'}<br/>
        {$contact_infos.fax}
      </div>
    </div>
  {/if}
  {if $contact_infos.email}
    <div class="block">
      <div class="icon"><i class="material-icons">mail_outline</i></div>
      <div class="data email">
        {l s='Email us:' d='Shop.Theme'}<br/>
        <a href="mailto:{$contact_infos.email}">{$contact_infos.email}</a>
       </div>
    </div>
  {/if}
</div>
