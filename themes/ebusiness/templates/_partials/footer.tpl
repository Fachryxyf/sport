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
<div class="footer-container">
  <div class="container">
        <div class="footer_top">
            {hook h='displayFooter'}
        </div> 
  </div>
  <div class="footer_after">
      <div class="container">
            {if isset($tc_config.YBC_TC_PAYMENT_LOGO) && $tc_config.YBC_TC_PAYMENT_LOGO}
                <div class="payment_footer">                                       
                    <ul class="payment_footer_img">
                        <li>
                            <img src="{$tc_module_path}images/config/{$tc_config.YBC_TC_PAYMENT_LOGO}" alt="{l s='Payment methods'}" title="{l s='Payment methods'}" />
                        </li>
                    </ul>
                </div>
            {/if}
            {if isset($tc_config.YBC_FOOTER_LINK_CUSTOM) && $tc_config.YBC_FOOTER_LINK_CUSTOM}
                <div class="footer_link_bottom">
                    {$tc_config.YBC_FOOTER_LINK_CUSTOM nofilter}
                </div>
             {/if}
          {hook h='displayFooterAfter'}
      </div>
  </div>
  <div class="footer_before">
      <div class="container">
          <div class="row">
            {hook h='displayFooterBefore'}
          </div>
      </div>
  </div>
  
  <div class="footer_bottom">
      <div class="container">
          <div class="row">
              <div class="col-md-12 coppyright">
                  <div class="ybc_coppyright">
                     {if isset($tc_config.YBC_TC_COPYRIGHT_TEXT) && $tc_config.YBC_TC_COPYRIGHT_TEXT}
                        {$tc_config.YBC_TC_COPYRIGHT_TEXT nofilter}
                     {/if}
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="scroll_top"><span>{l s='TOP' d='Shop.Theme.Actions'}</span></div>
</div>
