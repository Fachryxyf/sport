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

<div class="block-contact links wrapper">
    <h4 class="text-uppercase block-contact-title hidden-md-down">{l s='Store information' d='Shop.Theme'}</h4>
    
    <div class="title clearfix hidden-md-up" data-target="#contact_footer" data-toggle="collapse">
        <span class="h3">{l s='Store information' d='Shop.Theme.CustomerAccount'}</span>
        <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">expand_more</i>
            <i class="material-icons remove">expand_less</i>
          </span>
        </span>
    </div>
    <div class="collapse" id="contact_footer">
          <i class="icon_pin_alt"></i>{l s='Address: ' d='Shop.Theme'}{$contact_infos.address.address1 nofilter}
          {if isset($contact_infos.address.address2) && $contact_infos.address.address2 != ""}
            <br />
            <i class="icon_pin_alt"></i>{l s='Address 2: ' d='Shop.Theme'}{$contact_infos.address.address2 nofilter}
          {/if}
          {if $contact_infos.phone}
            <br/>
            <i class="icon_phone"></i>
            {* [1][/1] is for a HTML tag. *}
            {l s='Phone: [1]%phone%[/1]' sprintf=['[1]' => '<span>', '[/1]' => '</span>', '%phone%' => $contact_infos.phone]
              d='Shop.Theme'
            }
          {/if}
          {if $contact_infos.fax}
            <br>
            <i class="icon_printer"></i>
            {* [1][/1] is for a HTML tag. *}
            {l
              s='Fax: [1]%fax%[/1]'
              sprintf=[
                '[1]' => '<span>',
                '[/1]' => '</span>',
                '%fax%' => $contact_infos.fax
              ]
              d='Shop.Theme'
            }
          {/if}
          {if $contact_infos.email}
            <br>
            <i class="icon_mail_alt"></i>
            {* [1][/1] is for a HTML tag. *}
            {l
              s='Email us: [1]%email%[/1]'
              sprintf=[
                '[1]' => '<span>',
                '[/1]' => '</span>',
                '%email%' => $contact_infos.email
              ]
              d='Shop.Theme'
            }
          {/if}
      </div>
</div>